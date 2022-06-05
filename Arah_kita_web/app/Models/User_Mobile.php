<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User_Mobile extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = "user_mobiles";

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_hp',
        'tgl_lahir',
        'email',
        'password,'

    ];

    public function transaksi()
    {

        return $this->hasMany(Transaksi::class);
    }
    public function tiket()
    {

        return $this->hasMany(Tiket::class);
    }
}
