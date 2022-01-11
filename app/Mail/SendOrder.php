<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $nama_customer;
    public $alamat_lengkap;
    public $no_hp;
    public $judul_pekerjaan;
    public $jenis_order;
    public $kontak_penerima;
    public $lokasi_pekerjaan;
    public $deskripsi_pekerjaan;
    public $detail_pekerjaan;
    public $keterangan;
    public $path_pdf_purchase;
    public $id_invoice;
    public $pdf_btn;
    public $wa_saya;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama_customer,$alamat_lengkap,$no_hp ,$judul_pekerjaan, $jenis_order,$kontak_penerima,$lokasi_pekerjaan,$deskripsi_pekerjaan,$detail_pekerjaan,$keterangan, $path_pdf_purchase, $id_invoice, $pdf_btn,$wa_saya)
    {
        $this->nama_customer = $nama_customer;
        $this->alamat_lengkap = $alamat_lengkap;
        $this->no_hp = $no_hp;
        $this->judul_pekerjaan = $judul_pekerjaan;
        $this->jenis_order = $jenis_order;
        $this->kontak_penerima = $kontak_penerima;
        $this->lokasi_pekerjaan = $lokasi_pekerjaan;
        $this->deskripsi_pekerjaan = $deskripsi_pekerjaan;
        $this->detail_pekerjaan = $detail_pekerjaan;
        $this->keterangan = $keterangan;
        $this->path_pdf_purchase = $path_pdf_purchase;
        $this->id_invoice = $id_invoice;
        $this->pdf_btn = $pdf_btn;
        $this->wa_saya = $wa_saya;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            return $this->from('dakdok.id@gmail.com', 'dakdok.id')->subject("Order dari $this->nama_customer")
            ->view('dashboard/email/email_order');
            echo 'masuk';
            
        } catch (Exception $e) {
            return $e->getMessage();
            
        }
    }
}
