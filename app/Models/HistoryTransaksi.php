<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTransaksi extends Model
{
    use HasFactory;
    protected $table = 'history_transaksi';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = [
        'id_user',
        'nama_service',
        'status',
    ];
}
