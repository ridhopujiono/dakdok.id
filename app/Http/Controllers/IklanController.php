<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;
use ImgCompress;
use File;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Iklan::orderBy('id_iklan', 'desc')->get();
        return view('admin.iklan',[
            'title' => "Halaman Iklan | dakdok.id",
            'active' => "iklan",
            'data' => $data,
            'no' => 1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_iklan',[
            'title' => "Halaman Tambah Iklan | dakdok.id",
            'active' => "iklan",
            'no' => 1,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "nama_iklan" => ['required'],
            "deskripsi_iklan" => ["required"],
            'foto' => ['required','mimes:jpg,png,jpeg,gif,svg', 'dimensions:min_width=400, min_height=950'],
        ]);
        // Kompress Image
        $originalImage= $request->file('foto');
        $thumbnailImage = ImgCompress::make($originalImage);
        $thumbnailPath = public_path('admin/foto_iklan/');
        $thumbnailImage->resize(936,365);
        $thumbnailImageDestination = $thumbnailPath.time().$originalImage->getClientOriginalName();
        $thumbnailImageName = time().$originalImage->getClientOriginalName();
        $thumbnailImage->save($thumbnailImageDestination);

        $validateData["foto"] = $thumbnailImageName;

        $insert = Iklan::create($validateData);
        if(!$insert){
            return redirect('/tambah_iklan')->with([
                'error' => "Kesalahan saat menyimpan data!"
            ]);
        }else{
            return redirect('/tambah_iklan')->with([
                'success' => 'Data tersimpan!'
            ]);
        }
    }

    
    public function get_iklan()
    {
        try {

            $data = Iklan::all();
            $obj = (object) array("iklan" => $data);
            return response()->json($obj);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    public function get_new_iklan()
    {
        try {

            $data = Iklan::orderBy('id_iklan', 'desc')->limit(3)->get();
            $obj = (object) array("iklan" => $data);
            return response()->json($obj);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function edit(Iklan $iklan)
    {
        $data = Iklan::where('id_iklan', $iklan->id_iklan)->first();
        return view('admin/edit_iklan', [
            'title' => "Halaman Edit Iklan | dakdok.id",
            'active' => "iklan",
            'no' => 1,
            "data" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iklan $iklan)
    {

        // dd([$request->all(), $iklan->id_iklan]);
        try {
            if ($request->file("foto") == NULL) {

                $data = Iklan::where("id_iklan", $iklan->id_iklan)->update([
                    "nama_iklan" => $request->nama_iklan,
                    "deskripsi_iklan" => $request->deskripsi_iklan
                ]);

                if ($data) {
                    return redirect('iklan')->with('berhasil_update', "berhasil update $iklan->nama_iklan");
                } else {
                    return response('error');
                }
                // return 'foto kosong';
            } else {
                //Gambar Thumbnail
                $originalImage= $request->file('foto');
                $thumbnailImage = ImgCompress::make($originalImage);
                $thumbnailPath = public_path('admin/foto_iklan/');
                $thumbnailImage->resize(600,400);
                $thumbnailImageDestination = $thumbnailPath.time().$originalImage->getClientOriginalName();
                $thumbnailImageName = time().$originalImage->getClientOriginalName();
                $thumbnailImage->save($thumbnailImageDestination);
                // Cek gambar lalu hapus
                // asli
                $cek_foto_asli =  Iklan::where("id_iklan", $iklan->id_iklan)->get('foto');
                $cek_foto1 = $cek_foto_asli[0]->foto;

                $filename_asli = public_path("admin/foto_iklan/$cek_foto1");

                if (File::exists($filename_asli)) {
                    unlink($filename_asli);
                }

                $data = Iklan::where("id_iklan", $iklan->id_iklan)->update([
                    "nama_iklan" => $request->nama_iklan,
                    "deskripsi_iklan" => $request->deskripsi_iklan,
                    "foto" => $thumbnailImageName
                ]);

                if ($data) {
                    return redirect('iklan')->with('berhasil_update', "berhasil update $iklan->nama_iklan");
                } else {
                    return response('error');
                }
            }
        } catch (Exception $e) {
            return response($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iklan  $iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iklan $iklan)
    {
        $cek_foto_asli =  Iklan::where("id_iklan", $iklan->id_iklan)->get('foto');
        $cek_foto1 = $cek_foto_asli[0]->foto;

        $filename_asli = public_path("admin/foto_iklan/$cek_foto1");

        if (File::exists($filename_asli)) {
            unlink($filename_asli);

            Iklan::destroy($iklan->id_iklan);

            return redirect('iklan')->with('berhasil_hapus', 'Berhasil menghapus!');
;        }
    }
}
