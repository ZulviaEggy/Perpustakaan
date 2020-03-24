<?php

namespace App\Exports;

use App\Models\Siswa;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SiswaExport implements FromView
{
    use Exportable;
    
    public function view(): View
    {
        $data =DB::table('Siswa');
        $data = [['NIS' => null, 'nama_siswa' => null, 'alamat' => null, 'gender' => 'P/L', 'kelas' => 'SD Tahfidz/SMP Islam/SMA Tahfidz/P-TB/MA', 'tempat_lahir' => null, 'tanggal_lahir' => null, 'no_telp' => null, 'agama' => null,'email' => null
        ]];
        return view('page.siswa.siswa_import', ['data' => $data
            ]);
    }

}