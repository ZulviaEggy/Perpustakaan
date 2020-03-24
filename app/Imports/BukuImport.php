<?php

namespace App\Imports;

use App\Models\Buku;
use App\Models\Kategori;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BukuImport implements ToModel,  WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $row['kategori_id'] = Kategori::where("id", "like", "%",$row['kategori_id']."%");
        return new Buku([
            'kode_buku'             => $row['kode_buku'],
            'judul_buku'            => $row['judul'],
            'kategori_id'           => $row['kategori_id'], 
            'penulis'               => $row['penulis'],
            'penerbit'              => $row['penerbit'], 
            'tahun_terbit'          => $row['tahun_terbit'],
            'ISBN'                  => $row['isbn'],
            'jumlah'                => $row['jumlah'],
        ]);
    }
}
