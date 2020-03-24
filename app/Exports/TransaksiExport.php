<?php

namespace App\Exports;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Status;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class TransaksiExport implements FromView
{
    use Exportable;
    
    public function view(): View
    {
        $peminjaman =DB::table('Peminjaman')
        ->join('status', 'status.id', '=', 'peminjaman.status_id')
        ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
        ->select('buku.judul_buku','peminjaman.*', 'status.name','status.class')
        ->paginate( 20 );
        return view('laporan.transaksi_pdf', ['peminjaman' => $peminjaman
        
        ]);
    }
}
