<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('master_kategori')
                ->where('ID_Kategori', 'LIKE', 'KL%')
                ->orderBy('ID_Kategori', 'asc')
                ->paginate(10);
        // return view('admin.pertanyaan.index')->with('list', $list);
        return view('admin.kategori.index', ['list'=> $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ID_Kategori' => 'required',
            'Nama_Kategori' => 'required',
            'Deskripsi' => 'required'
        ]);

        $id_kat = $request->input('ID_Kategori');

        // Create
        DB::table('master_kategori')->insert([
            'ID_Kategori' => $request->input('ID_Kategori'),
            'Nama_Kategori' => $request->input('Nama_Kategori'),
            'Deskripsi' => $request->input('Deskripsi'),
            'aktif' => 1
        ]);

        if ($request->hasFile('gambar_kat')) {
            // Get File Name w/ Ext
            $filenameWithExt = $request->file('gambar_kat')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Ext
            $extension = $request->file('gambar_kat')->getClientOriginalExtension();
            // File Name To Store
            $fileNameToStore = $id_kat.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $store_location = 'gambar_kategori';
            $file = $request->file('gambar_kat');
            $file->move($store_location, $fileNameToStore);
        }

        if ($request->hasFile('gambar_kat')) {
            DB::table('master_gambar')->insert([
                'nama' => $fileNameToStore,
                'id_ref' => $request->input('ID_Kategori'),
                'tipe' => 'kategori'
            ]);
        }

        return redirect('/admin/kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = DB::table('master_kategori')
                ->where('ID_Kategori', $id)
                ->first();
        
        $gambar = DB::table('master_gambar')
                ->where('id_ref', $id)
                ->first();
        
        // $topiks = DB::table('master_topik')
        //         ->where('Topik', $kategori->Topik)
        //         ->get();
        
        // $materis = DB::table('master_upload_materi')
        //         ->where('ID_User', $id)
        //         ->get();
        
        // $jumTopik = DB::table('master_topik')
        //         ->where('ID_User', $id)
        //         ->count();
        
        // $jumMateri = DB::table('master_upload_materi')
        //         ->where('ID_User', $id)
        //         ->count();

        return view('admin.kategori.show', ['kategori'=> $kategori, 'gambar'=>$gambar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = DB::table('master_kategori')
                ->where('ID_Kategori', $id)
                ->first();

        return view('admin.kategori.edit', ['kategori'=> $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nama_Kategori'=>'required',
            'Deskripsi'=>'required'
        ]);

        if ($request->hasFile('gambar_kat')) {
            $gambar = DB::table('master_gambar')
                ->where('id_ref', $id)
                ->first();

            if (!empty($gambar)) {
                $image_path = public_path().'/gambar_kategori'.'/'.$gambar->nama;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
            
            // Get File Name w/ Ext
            $filenameWithExt = $request->file('gambar_kat')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Ext
            $extension = $request->file('gambar_kat')->getClientOriginalExtension();
            // File Name To Store
            $fileNameToStore = $id.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $store_location = 'gambar_kategori';
            $file = $request->file('gambar_kat');
            $file->move($store_location, $fileNameToStore);
        }

        DB::table('master_kategori')
                ->where('ID_Kategori', $id)
                ->update([
                    'Nama_Kategori' => $request->Nama_Kategori,
                    'Deskripsi' => $request->Deskripsi
                ]);
        
        $gambar = DB::table('master_gambar')
                ->where('id_ref', $id)
                ->first();
        
        if (!empty($gambar)) {
            if ($request->hasFile('gambar_kat')) {
                DB::table('master_gambar')
                ->where('id_ref', $id)
                ->update([
                    'nama' => $fileNameToStore
                ]);
            }
        } else {
            if ($request->hasFile('gambar_kat')) {
                DB::table('master_gambar')->insert([
                    'nama' => $fileNameToStore,
                    'id_ref' => $id,
                    'tipe' => 'kategori'
                ]);
            }
        }
        
        
        return redirect('/admin/kategori')->with('success', 'Kategori berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gambar = DB::table('master_gambar')
                ->where('id_ref', $id)
                ->first();

        if (!empty($gambar)) {
            $image_path = 'gambar_kategori'.'/'.$gambar->nama;           
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        DB::table('master_gambar')
                ->where('id_ref', $id)
                ->delete();

        DB::table('master_kategori')
                ->where('ID_Kategori', $id)
                ->delete();
                
        return redirect('/admin/kategori')->with('success', 'Kategori telah dihapus');
    }
}
