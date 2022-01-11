<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiProyek;
use Illuminate\Support\Facades\DB;
class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TransaksiProyek::orderBy('id_transaksi_proyek','desc')->get();
        /*
        Count Data kosong - data masuk
         */
        $data_order = TransaksiProyek::where('status',1)->count();
        $data_survey = TransaksiProyek::where('status',2)->count();
        $data_cancel = TransaksiProyek::where('status', 3)->count();
        $data_deal = TransaksiProyek::where('status', 4)->count();
        $data_dikerjakan = TransaksiProyek::where('status', 5)->count();
        $data_selesai = TransaksiProyek::where('status', 6)->count();
        $data_dibayar = TransaksiProyek::where('status', 7)->count();
        $data_close = TransaksiProyek::where('status', 8)->count();
        
        $data_count = [
            "data_order" => $data_order,
            "data_survey" => $data_survey,
            "data_cancel" => $data_cancel,
            "data_deal" => $data_deal,
            "data_dikerjakan" => $data_dikerjakan,
            "data_selesai" => $data_selesai,
            "data_dibayar" => $data_dibayar,
            "data_close" => $data_close,
        ];
        // dd($data_count);
        return view('admin/proyek',[
            'title' => "Halaman Proyek | dakdok.id",
            'active' => "proyek",
            'data' => $data,
            'status_row' => DB::table('status')->get(),
            'no' => 1,
            'data_count' => $data_count
        ]);
    }

    
    public function ubah_status_proyek(Request $request)
    {
        $id_transaksi_proyek = $request->post('id');
        $status = $request->post('status');
        $ubah_status = TransaksiProyek::where('id_transaksi_proyek', $id_transaksi_proyek)->update([
            'status' => intval($status)
        ]);
        $transaksi = TransaksiProyek::where('id_transaksi_proyek', $request->id)->get();
        $id_invoice = $transaksi[0]->id_invoice;
        if($ubah_status){
            return redirect('proyek')->with('berhasil_update_status', "Berhasil update status $id_invoice");
        }else{
            return redirect('proyek')->with('gagal_update_status', "Gagal update status $id_invoice");
        }
    }

    public function hapus_proyek(Request $request)
    {
        $delete_proyek = TransaksiProyek::where('id_transaksi_proyek', $request->id)->delete();

        if(!$delete_proyek){
            return redirect('proyek')->with('berhasil_hapus', "berhasil menghapus");
        }else{
            return redirect('proyek')->with('gagal_hapus', "berhasil menghapus");

        }
    }

    
    public function get_detail_proyek(Request $request)
    {
        try{
            $data = TransaksiProyek::where('id_transaksi_proyek', intval($request->id))->get();
            return response($data);
            
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    
    public function get_transaksi_proyek(Request $request)
    {
        $data = TransaksiProyek::orderBy('id_transaksi_proyek','desc')->get();
        $status_row = DB::table('status')->get();
        /*
        Count Data kosong - data masuk
         */
        $data_order = TransaksiProyek::where('status',1)->count();
        $data_survey = TransaksiProyek::where('status',2)->count();
        $data_cancel = TransaksiProyek::where('status', 3)->count();
        $data_deal = TransaksiProyek::where('status', 4)->count();
        $data_dikerjakan = TransaksiProyek::where('status', 5)->count();
        $data_selesai = TransaksiProyek::where('status', 6)->count();
        $data_dibayar = TransaksiProyek::where('status', 7)->count();
        $data_close = TransaksiProyek::where('status', 8)->count();
        
        $data_count = [
            "data_order" => $data_order,
            "data_survey" => $data_survey,
            "data_cancel" => $data_cancel,
            "data_deal" => $data_deal,
            "data_dikerjakan" => $data_dikerjakan,
            "data_selesai" => $data_selesai,
            "data_dibayar" => $data_dibayar,
            "data_close" => $data_close,
        ];

        return response([$data, $status_row, $data_count]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
