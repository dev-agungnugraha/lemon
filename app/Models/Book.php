<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        if(substr($this->cover, 0, 5) == 'https'){
            return $this->cover;
        }

        if($this->cover){
            return asset($this->cover);
        }

        return 'https://via.placeholder.com/150x200?text=No+Cover';
    }
}
