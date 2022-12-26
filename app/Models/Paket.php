<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Kontraks()
    {
        return $this->hasMany(Kontrak::class);
    }

    public function Progreskegiatans()
    {
        return $this->hasMany(Progreskegiatan::class);
    }
}
