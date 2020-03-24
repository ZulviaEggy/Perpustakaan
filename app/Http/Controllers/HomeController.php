<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::get();
        $buku      = Buku::get();
        $datas = Peminjaman::where('status_id', '=','3')->get();
        $datas2 = Peminjaman::where('status_id', '=','2')->get();
        $terbaru    = Buku::with('kategori')
                    ->orderBy('created_at','DESC')
                    ->take(3)
                    ->get();
     
        return view('index', compact('peminjaman', 'buku','terbaru','datas','datas2'));
    }

}
