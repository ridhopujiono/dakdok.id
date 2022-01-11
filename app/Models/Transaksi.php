<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_invoice',
        'id_order_layanan',
        'nama_customer',
        'alamat_lengkap',
        'no_hp',
        'jenis_order_layanan',
        'judul_pekerjaan',
        'kontak_penerima',
        'lokasi_pekerjaan',
        'deskripsi_pekerjaan',
        'pdf',
        'status'
    ];
    protected $casts = [
        'id_order_layanan' => 'array'
    ];
}
