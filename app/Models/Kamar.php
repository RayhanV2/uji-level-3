<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded;

    public function fasilitas_kamar() {
        return $this->belongsTo(Fasilitas_k::class);
    }
}
