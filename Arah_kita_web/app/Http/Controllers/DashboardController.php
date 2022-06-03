<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use App\Models\User_Mobile;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::select(DB::raw("COUNT(*) as count"))
            ->whereYear("created_at", date('Y'))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        // $bulan = Transaksi::select(DB::raw("Month(created_at) as bulan"))
        //     ->GroupBy(DB::raw("Month(created_at"))
        //     ->pluck('bulan');
        // dd($bulan);
        return view('dashboard.index', compact('transaksi'));
    }


    // public function grafik()
    // {
    //     $grafik = Transaksi::select(DB::raw("COUNT(*) as count"))
    //         ->GroupBy(DB::raw("Month(created_at)"))
    //         ->pluck('count');

    //     return view('dashboard.index', compact('grafik'));
    // }
}
