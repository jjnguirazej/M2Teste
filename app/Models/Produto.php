<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_campanha', 'nome', 'detalhes','preco'
     ];

     public function campanha(){
         return $this->belongsTo(Campanha::class);
     }
}
