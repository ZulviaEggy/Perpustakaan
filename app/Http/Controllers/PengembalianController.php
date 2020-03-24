<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = DB::table('peminjaman')
            ->join('status', 'status.id', '=', 'peminjaman.status_id')
            ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
            ->select('buku.judul_buku','peminjaman.*', 'status.name','status.class')
            ->paginate( 20 );
        return view('page.transaksi.pengembalian',  compact('peminjaman'));
    }
}
