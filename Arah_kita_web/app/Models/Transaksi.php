<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_mobile_id',
        'wisata_id',
        'tgl_tiket',
        'jumlah_tiket',
        'total_harga',
    ];

    public function user_mobile()
    {

        return $this->belongsTo(User_Mobile::class);
    }

    public function wisata()
    {

        return $this->belongsTo(Wisata::class);
    }
}
