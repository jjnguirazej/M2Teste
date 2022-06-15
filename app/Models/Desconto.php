<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desconto extends Model
{
    use HasFactory;

    protected $fillable = ['nome','id_campanha','valor_desconco'];

        public function produto() {

            return $this->hasMany(Produto::class);
        }

        public function campanha() {

            return $this->belongsTo(Campanha::class);
        }
}
