<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\HistoryTransaksi;
use App\Models\OrderLayanan;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use File;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Transaksi::orderBy('id_transaksi','desc')->get();
        /*
        Count Data kosong - data masuk
         */
        $data_order = Transaksi::where('status',1)->count();
        $data_survey = Transaksi::where('status',2)->count();
        $data_cancel = Transaksi::where('status', 3)->count();
        $data_deal = Transaksi::where('status', 4)->count();
        $data_dikerjakan = Transaksi::where('status', 5)->count();
        $data_selesai = Transaksi::where('status', 6)->count();
        $data_dibayar = Transaksi::where('status', 7)->count();
        $data_close = Transaksi::where('status', 8)->count();
        
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
        // $location = Location::get(\Request::ip());
        // dd($location);
        return view('admin/admin',[
            'title' => "Halaman Admin | dakdok.id",
            'active' => "utama",
            'data' => $data,
            'status_row' => DB::table('status')->get(),
            'no' => 1,
            'data_count' => $data_count
        ]);
    }
    public function get_transaksi()
    {
        $data = Transaksi::orderBy('id_transaksi','desc')->get();
        $status_row = DB::table('status')->get();
        /*
        Count Data kosong - data masuk
         */
        $data_order = Transaksi::where('status',1)->count();
        $data_survey = Transaksi::where('status',2)->count();
        $data_cancel = Transaksi::where('status', 3)->count();
        $data_deal = Transaksi::where('status', 4)->count();
        $data_dikerjakan = Transaksi::where('status', 5)->count();
        $data_selesai = Transaksi::where('status', 6)->count();
        $data_dibayar = Transaksi::where('status', 7)->count();
        $data_close = Transaksi::where('status', 8)->count();
        
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

    
    public function ubah_status(Request $request)
    {
        $id_transaksi = $request->post('id');
        $status = $request->post('status');
        $ubah_status = Transaksi::where('id_transaksi', $id_transaksi)->update([
            'status' => intval($status)
        ]);
        $transaksi = Transaksi::where('id_transaksi', $request->id)->get();
        $id_invoice = $transaksi[0]->id_invoice;
        if($ubah_status){
            $no_telp = $transaksi[0]->no_hp;

            if(User::where('no_telp', $no_telp)->first()->id){
                HistoryTransaksi::create([
                    "id_user" => User::where('no_telp', $no_telp)->first()->id,
                    "nama_service" => $transaksi[0]->jenis_order_layanan,
                    "status" => intval($status)
                ]);
            }else{
                HistoryTransaksi::create([
                    "id_user" => "-",
                    "nama_service" => $transaksi[0]->jenis_order_layanan,
                    "status" => intval($status)
                ]);
            }
            return redirect('utama')->with('berhasil_update_status', "Berhasil update status $id_invoice");
        }else{
            return redirect('utama')->with('gagal_update_status', "Gagal update status $id_invoice");
        }
    }

    public function hapus_transaksi(Request $request)
    {
        $data = Transaksi::where('id_transaksi', $request->id)->get();
        $cek_pdf =  $data[0]->pdf;
        $filename_asli = public_path("pdf/$cek_pdf");

        // dd($filename_asli);
        if (File::exists($filename_asli)) {
            unlink($filename_asli);
            $delete_order = OrderLayanan::whereIn('id_order_layanan', $data[0]->id_order_layanan)->delete();

            $delete_transaksi = Transaksi::where('id_transaksi', $request->id)->delete();

            $id_invoice = $data[0]->id_invoice;
            if($delete_order && $delete_transaksi){
                return redirect('utama')->with('berhasil_hapus', "Berhasil hapus $id_invoice");
            }else{
                return redirect('utama')->with('gagal_hapus', "Gagal hapus $id_invoice");
            }
        }else{
            return 'error';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_detail(Request $request)
    {
        // return response($request->id);
        try{
            $data = Transaksi::where('id_transaksi', intval($request->id))->get();
            return response($data);
            
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function get_jml()
    {
        /*
        Count Data kosong - data masuk
         */
        $data_order = Transaksi::where('status',1)->count();
        $data_survey = Transaksi::where('status',2)->count();
        $data_cancel = Transaksi::where('status', 3)->count();
        $data_deal = Transaksi::where('status', 4)->count();
        $data_dikerjakan = Transaksi::where('status', 5)->count();
        $data_selesai = Transaksi::where('status', 6)->count();
        $data_dibayar = Transaksi::where('status', 7)->count();
        $data_close = Transaksi::where('status', 8)->count();
        
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

        return response($data_count);
    }

    public function get_history($id)
    {
        $data = HistoryTransaksi::where("id_user", $id)->get();
        for ($i=0; $i < count($data); $i++) { 
            if($data[$i]->status == "1"){
                $data[$i]->status = "order";
            }else if($data[$i]->status == "2"){
                $data[$i]->status = "survey";
            }else if($data[$i]->status == "3"){
                $data[$i]->status = "cancel";
            }else if($data[$i]->status == "4"){
                $data[$i]->status = "deal";
            }else if($data[$i]->status == "5"){
                $data[$i]->status = "dikerjakan";
            }else if($data[$i]->status == "6"){
                $data[$i]->status = "selesai";
            }else if($data[$i]->status == "7"){
                $data[$i]->status = "dibayar";
            }else if($data[$i]->status == "8"){
                $data[$i]->status = "close";
            }
        }
        return response()->json(
            [
                "status" => "success",
                "history" => $data
            ]
        );
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
