<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index()
    {
        $data = DB::table('master_berita_informasi')
        ->orderBy('id','ASC')
        ->paginate(10);
        // $data = DB::table('master_berita_informasi');
        // var_dump($data);
        return view('admin.berita.index', compact('data'));
    }

    public function tambah(){
        return view('admin.berita.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);
    
        $id_berita = $request->input('id');

        $mytime = Carbon::now('Asia/Jakarta');
        
        $mytime->toDateTimeString();
        $getuser = $request->session()->get('ID_User');

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $id_berita.'_'.$filename.'_'.time().'.'.$extension;
            $store_location = 'foto_berita';
            $file = $request->file('foto');
            $file->move($store_location, $fileNameToStore);
        }

        if ($request->hasFile('foto')) {
            DB::table('master_berita_informasi')->insert([
                'judul' => $request->input('judul'),
                'isi' => $request->input('isi'),
                'nik' => $getuser,
                'foto' => $fileNameToStore,
                'tanggal' => $mytime
            ]);
        }

        return redirect('/admin/berita')->with('success', 'Berita berhasil ditambahkan');
    }
    public function show($id)
    {
        $berita = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();
        return view('admin.berita.show', ['berita'=> $berita]);
    }

    public function edit($id){
        $berita = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();

        return view('admin.berita.edit', ['berita'=> $berita]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'id' => '',
            'judul' => 'required',
            'isi' => 'required',
            // 'nik' => '',
            'foto' => 'required',
            // 'tanggal' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $foto = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();

            if (!empty($foto)) {
                $image_path = public_path().'/foto_berita'.'/'.$foto->foto;
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
            $store_location = 'foto_berita';
            $file = $request->file('foto');
            $file->move($store_location, $fileNameToStore);
        }

        $mytime = Carbon::now('Asia/Jakarta');
        
        $mytime->toDateTimeString();
        $getuser = $request->session()->get('ID_User');
        
        $foto = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();
        
        if (!empty($foto)) {
            if ($request->hasFile('foto')) {
                DB::table('master_berita_informasi')
                ->where('id', $id)
                ->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'nik' => $getuser,
                    'foto' => $fileNameToStore
                    // 'tanggal' => $mytime
                ]);
            }
        }
        
        return redirect('/admin/berita')->with('success', 'Berita berhasil di Edit');
    }

    public function destroy($id)
    {

        $berita = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();

        if (!empty($berita)) {
            $image_path = 'foto_berita'.'/'.$berita->foto;           
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        DB::table('master_berita_informasi')
                ->where('id', $id)
                ->delete();
                
        return redirect('admin/berita')->with('success', 'Berita telah dihapus');
    }
}
