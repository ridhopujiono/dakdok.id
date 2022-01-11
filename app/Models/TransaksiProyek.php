<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiProyek extends Model
{
    use HasFactory;
    protected $table = 'transaksi_proyek';
    protected $primaryKey = 'id_transaksi_proyek';
    protected $fillable = [
        'id_invoice',
        'nama_customer',
        'alamat_lengkap',
        'no_hp',
        'jenis_order_proyek',
        'kontak_penerima',
        'lokasi_pekerjaan',
        'deskripsi_pekerjaan',
        'status'
    ];
}
