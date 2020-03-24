<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;

    /**
     * Get the notes for the users.
     */
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman');
    }

    protected $dates = [
        'deleted_at'
    ];
}
