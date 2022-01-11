<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLayanan extends Model
{
    use HasFactory;
    protected $table = 'order_layanan';
    protected $primaryKey = 'id_order_layanan';
    protected $guarded = [];
    protected $fillable = [
        'id_user',
        'detail_pekerjaan',
        'keterangan',
        'status',
    ];
}
