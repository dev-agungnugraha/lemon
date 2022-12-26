<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreskegiatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
