<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_mobile_id',
        'wisata_id',
        'transaksi_id',
        'kode_tiket',
        'nama_pembeli',
        'nama_wisata',
        'tgl_tiket',
        'jumlah_tiket',
        'total_harga',
        'status',
    ];

    public function user_mobile()
    {

        return $this->belongsTo(User_Mobile::class);
    }

    public function wisata()
    {

        return $this->belongsTo(Wisata::class);
    }

    public function transaksi()
    {

        return $this->belongsTo(Transaksi::class);
    }
}
