<?php

namespace App\Http\Controllers;
use App\Mail\SendOrder;
use Mail;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use App\Models\OrderLayanan;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\HistoryTransaksi;
use App\Models\TransaksiProyek;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

class DashboardController extends Controller
{
    protected $auth, $database;

    public function __construct()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/config-firebase.json')
        ->withDatabaseUri('https://dakdok-e5afe-default-rtdb.firebaseio.com/');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }
    public function index()
    {
    	return view('dashboard.index');
    }

    public function service()
    {
    	return view('dashboard.layanan');
    }

    public function form($judul_service = NULL, $service = NULL)
    {
        $now = Carbon::now();
        $waktu2 = $now->format('H:i');
        if($service == NULL && $judul_service == NULL){
            if(session('jenis_order')){
                session()->forget('jenis_order');
                session()->forget('judul_pekerjaan');
            }
            return view("dashboard.form",compact('waktu2'));
        }else{
            session()->put('jenis_order',$service);
            session()->put('judul_pekerjaan',$judul_service);
            return view("dashboard.form",compact('waktu2'));
        }
    }
    public function form_proyek($judul_proyek = NULL)
    {
        $now = Carbon::now();
        $waktu2 = $now->format('H:i');
        if($judul_proyek == NULL){
            if(session('jenis_order_proyek')){
                session()->forget('jenis_order_proyek');
                
            }
            return view("dashboard.form_proyek_berhasil",compact('waktu2'));
        }else{
            session()->put('jenis_order_proyek',$judul_proyek);
            return view("dashboard.form_proyek",compact('waktu2'));
        }
    }
    public function form_from_service(Request $request){
    	session()->put('jenis_order',$request->jenis_order);
    	session()->put('judul_pekerjaan',$request->judul_pekerjaan);
    	return view('dashboard.form');
    }
    public function post_form(Request $request)
    {

        try {
    		$nama_customer = $request->nama_customer;
    		$alamat_lengkap = $request->alamat_lengkap;
    		$no_hp = $request->no_hp;
            //substring 0 
    		$subs_telp = substr($no_hp, 1);
    		$wa_saya = "wa.me/". "62".$subs_telp;

    		$judul_pekerjaan = $request->judul_pekerjaan;
    		$jenis_order = $request->jenis_order;
    		$kontak_penerima = $request->kontak_penerima;
    		$lokasi_pekerjaan = $request->lokasi_pekerjaan;
    		$deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
    		$detail_pekerjaan = $request->detail_pekerjaan;
    		$keterangan = $request->keterangan;
    		$waktu2 = $request->waktu2;
    		$now = Carbon::now();
    		$tanggal = $now->format('d/m/Y');
    		$waktu = $now->format('H:i');
    		$email = "dakdok.id@gmail.com";
    		$path_1 = time()."_".$nama_customer.".pdf";

    		$path_pdf_purchase = public_path('pdf/').$path_1;
    		$pdf_btn = time()."_".$nama_customer.".pdf";

    		$detik = $now->format('i');
    		$id_invoice = "INV-$detik/$tanggal-$waktu";
    		$buka_pdf = PDF::loadView('dashboard/pdf/purchase_order', compact('nama_customer','alamat_lengkap','no_hp','jenis_order','judul_pekerjaan','kontak_penerima','lokasi_pekerjaan','deskripsi_pekerjaan','detail_pekerjaan','keterangan','tanggal','waktu','waktu2','id_invoice'))->setPaper(array(0,0,609.4488,935.433),'portait')->save($path_pdf_purchase);

    		if($buka_pdf){
    			try {
    				$kirim_email =  Mail::to($email)->send(new SendOrder($nama_customer,$alamat_lengkap,$no_hp ,$judul_pekerjaan, $jenis_order,$kontak_penerima,$lokasi_pekerjaan,$deskripsi_pekerjaan,$detail_pekerjaan,$keterangan, $path_pdf_purchase, $id_invoice, $pdf_btn,$wa_saya));
                    // User::create(["name" => "dhihin","email"=>"dakdok.id@gmail.com","password" => bcrypt("password"), "no_telp" => "-", "role"=>"1"])

                        $id_order_layanan = [];
                        for ($i=0; $i < count($keterangan); $i++) { 
                            // looping untuk mass insert dan menangkap id_order_layanan dan dipush ke array
                            $order[$i] = OrderLayanan::create([
                                "detail_pekerjaan" => $detail_pekerjaan[$i],
                                "keterangan" => $keterangan[$i],
                            ]);
                            $orderId[$i] = $order[$i]->id_order_layanan;
                            array_push($id_order_layanan, $orderId[$i]);
                        
                        }
                        $data_id_order = json_encode($orderId);

                        // dd($request->all());
                        Transaksi::create([
                            "id_invoice" => $id_invoice,
                            "id_order_layanan" => $id_order_layanan,
                            "nama_customer" => $nama_customer,
                            "alamat_lengkap" => $alamat_lengkap,
                            "no_hp" => $no_hp,
                            "jenis_order_layanan" => $jenis_order,
                            "judul_pekerjaan" => $judul_pekerjaan,
                            "kontak_penerima" => $kontak_penerima ,
                            "lokasi_pekerjaan" => $lokasi_pekerjaan,                         "deskripsi_pekerjaan" => $deskripsi_pekerjaan,
                            "pdf" => $path_1
                        ]);
                        $ref = $this->database->getReference('transaksi')
                        ->set([
                            "id_invoice" => $id_invoice,
                            "id_order_layanan" => $id_order_layanan,
                            "nama_customer" => $nama_customer,
                            "alamat_lengkap" => $alamat_lengkap,
                            "no_hp" => $no_hp,
                            "jenis_order_layanan" => $jenis_order,
                            "judul_pekerjaan" => $judul_pekerjaan,
                            "kontak_penerima" => $kontak_penerima ,
                            "lokasi_pekerjaan" => $lokasi_pekerjaan,                         "deskripsi_pekerjaan" => $deskripsi_pekerjaan,
                            "pdf" => $path_1
                        ]);
                        if(User::where('no_telp', $no_hp)->first()->id){
                            HistoryTransaksi::create([
                                "id_user" => User::where('no_telp', $no_hp)->first()->id,
                                "nama_service" => $jenis_order,
                                "status" => "1"
                            ]);
                        }else{
                            HistoryTransaksi::create([
                                "id_user" => "-",
                                "nama_service" => $jenis_order,
                                "status" => "1"
                            ]);

                        }

    				return redirect('form')->with('berhasil','berhasil order');

    			} catch (Exception $e) {
    				return $e->getMessage();
    			}
    		}
    	} catch (Exception $e) {
    		return $e->getMessage();
    	}

    }
    public function post_proyek(Request $request)
    {

        try {
    		$nama_customer = $request->nama_customer;
    		$alamat_lengkap = $request->alamat_lengkap;
    		$no_hp = $request->no_hp;
            //substring 0 
    		$subs_telp = substr($no_hp, 1);
    		$wa_saya = "wa.me/". "62".$subs_telp;
    		$jenis_order = $request->jenis_order_proyek;
    		$kontak_penerima = $request->kontak_penerima;
    		$lokasi_pekerjaan = $request->lokasi_pekerjaan;
    		$deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
    		$waktu2 = $request->waktu2;
    		$now = Carbon::now();
    		$tanggal = $now->format('d/m/Y');
    		$waktu = $now->format('H:i');
    		
    		$detik = $now->format('i');
    		$id_invoice = "INV-$detik/$tanggal-$waktu";
    		
    		
    			try {
                        TransaksiProyek::create([
                            "id_invoice" => $id_invoice,
                            "nama_customer" => $nama_customer,
                            "alamat_lengkap" => $alamat_lengkap,
                            "no_hp" => $no_hp,
                            "jenis_order_proyek" => $jenis_order,
                            "kontak_penerima" => $kontak_penerima ,
                            "lokasi_pekerjaan" => $lokasi_pekerjaan,                         "deskripsi_pekerjaan" => $deskripsi_pekerjaan
                        ]);
                        $ref = $this->database->getReference('transaksi_proyek')
                        ->set([
                            "id_invoice" => $id_invoice,
                            "nama_customer" => $nama_customer,
                            "alamat_lengkap" => $alamat_lengkap,
                            "no_hp" => $no_hp,
                            "jenis_order_proyek" => $jenis_order,
                            "kontak_penerima" => $kontak_penerima ,
                            "lokasi_pekerjaan" => $lokasi_pekerjaan,                         "deskripsi_pekerjaan" => $deskripsi_pekerjaan
                        ]);

    				return redirect('form_proyek_berhasil')->with('berhasil','berhasil order');

    			} catch (Exception $e) {
    				return $e->getMessage();
    			}
    		
    	} catch (Exception $e) {
    		return $e->getMessage();
    	}

    }
    public function form_proyek_berhasil()
    {
    	return view('dashboard.form_proyek_berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
