<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel,  WithHeadingRow
{
    public function transformDate($value, $format = 'Y-m-d'){
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'NIS'             => $row['nis'],
            'nama_siswa'      => $row['nama_siswa'],
            'alamat'          => $row['alamat'], 
            'gender'          => $row['gender'],
            'kelas'           => $row['kelas'], 
            'tempat_lahir'    => $row['tempat_lahir'],
            'tanggal_lahir'   => \Carbon\Carbon::parse($row['tanggal_lahir']),
            'no_telp'         => $row['no_telp'],
            'agama'           => $row['agama'],
            'email'           => $row['email'],
        ]);
    }
}
