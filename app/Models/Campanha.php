<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    use HasFactory;

    protected $fillable = ['id_grupo_cidade','nome', 'status'];

    public function produto() {
        return $this->belongsTo(Produto::class);
     }

     public function cidade() {
        return $this->hasMany(GrupoCidade::class);
     }
}
