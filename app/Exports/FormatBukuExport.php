<?php

namespace App\Exports;

use App\Models\Buku;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class FormatBukuExport implements FromView
{
    use Exportable;
    
    public function view(): View
    {
        return view('laporan.format_buku', [
            'datas' => Buku::all()
        ]);
    }

}
