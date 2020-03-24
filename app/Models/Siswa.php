<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['NIS', 'nama_siswa', 'alamat', 'gender', 'kelas', 'tempat_lahir', 'tanggal_lahir', 'no_telp', 'agama', 'email'];


    public function gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }
}
