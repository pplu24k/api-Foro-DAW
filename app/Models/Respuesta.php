<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [

        'nick',
        'contenido',


    ];
    public function comentario(){
        return $this->belongsTo(Comentario::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
