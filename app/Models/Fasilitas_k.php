<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas_k extends Model
{
    use HasFactory;

    protected $guarded;

    public function kamar() {
        return $this->belongsTo(Kamar::class, 'tipe_kamar', 'tipe_kamar');
    }

}
