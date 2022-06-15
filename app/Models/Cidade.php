<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome'];

    public function grupoCidae(){

        return $this->belongsTo('App\Models\Cidade','id_grupo_cidade');
    }
}
