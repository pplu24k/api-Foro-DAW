<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [

        'contenido',


    ];
    public function hilo(){
        return $this->belongsTo(Hilo::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
