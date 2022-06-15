<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoCidade extends Model
{
    use HasFactory;

    protected $fillable = ['id_cidade','nome'];


    public function Campanha(){
        return $this->belongsTo('App\Models\Campanha')->where('status','=',1);
    }

    public function Cidades(){
        return $this->hasMany('App\Models\Cidade');
    }
}
