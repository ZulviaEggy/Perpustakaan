<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['kode_buku', 'judul_buku', 'ketegori_id', 'edisi', 'penulis', 'penerbit', 'tahun_terbit', 'ISBN', 'jumlah', 'cover'];
   
    
    /**
     * Get the kategori that owns the Notes.
      */
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman');
    }
}
