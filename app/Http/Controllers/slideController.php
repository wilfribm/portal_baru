<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class slideController extends Controller
{

    public function index()
    {
        $data = DB::select("SELECT * FROM master_slideshow");
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
            // Get File Name w/ Ext
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // File Name To Store
            $fileNameToStore = $id_slide.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
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
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $foto = DB::table('master_slideshow')
                ->where('id', $id)
                ->first();

            if (!empty($foto)) {
                $image_path = public_path().'/foto_slide'.'/'.$foto->foto;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
            
            // Get File Name w/ Ext
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // File Name To Store
            $fileNameToStore = $id.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $store_location = 'foto_slide';
            $file = $request->file('foto');
            $file->move($store_location, $fileNameToStore);
        }
        
        $foto = DB::table('master_slideshow')
                ->where('id', $id)
                ->first();
        
        if (!empty($foto)) {
            if ($request->hasFile('foto')) {
                DB::table('master_slideshow')
                ->where('id', $id)
                ->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'foto' => $fileNameToStore
                ]);
            }
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
