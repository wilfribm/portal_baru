<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class slideController extends Controller
{

    public function index()
    {
        $data = DB::Table('master_slideshow')
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('admin.slideshow.index', compact('data'));
    }

    public function tambah(){
        return view('admin.slideshow.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => '',
            'foto' => 'required',
        ]);
    
        $id_slide = $request->input('id');

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $id_slide.'_'.$filename.'_'.time().'.'.$extension;
            $store_location = 'foto_slide';
            $file = $request->file('foto');
            $file->move($store_location, $fileNameToStore);
        }

        if ($request->hasFile('foto')) {
            DB::table('master_slideshow')->insert([
                'judul' => $request->input('judul'),
                'keterangan' => $request->input('keterangan'),
                'foto' => $fileNameToStore
            ]);
        }

        return redirect('/admin/slide')->with('success', 'Foto Slideshow berhasil ditambahkan');
    }
    public function show($id)
    {
        $slide = DB::table('master_slideshow')
                ->where('id', $id)
                ->first();
        return view('admin.slideshow.show', ['slide'=> $slide]);
    }

    public function edit($id){
        $slide = DB::table('master_slideshow')
                ->where('id', $id)
                ->first();

        return view('admin.slideshow.edit', ['slide'=> $slide]);
    }
    
    public function update(Request $request, $id)
    {
        $judul =$request->input('judul');
        $keterangan = $request->input('keterangan');

        $foto  = $request->file('foto');
        if(!empty($foto))
        {
            $namaFoto   = $foto->getClientOriginalName();
            $foto->move(\base_path() ."/public/foto_slide", $namaFoto);
            $update = array('judul'=>$judul, 'keterangan'=>$keterangan, 'foto'=>$namaFoto);
            DB::table('master_slideshow')->where('id', $id)->update($update);
        }else{
            $update = array('judul'=>$judul, 'keterangan'=>$keterangan);
            DB::table('master_slideshow')->where('id', $id)->update($update);
        }
        return redirect('/admin/slide')->with('success', 'Slideshow berhasil di Edit');
    }

    public function destroy($id)
    {

        $slide = DB::table('master_slideshow')
                ->where('id', $id)
                ->first();

        if (!empty($berita)) {
            $image_path = 'foto_slide'.'/'.$slide->foto;           
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        DB::table('master_slideshow')
                ->where('id', $id)
                ->delete();
                
        return redirect('admin/slide')->with('success', 'Slideshow telah dihapus');
    }
}
