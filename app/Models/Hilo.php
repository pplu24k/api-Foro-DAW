<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hilo extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre',


    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class);
    }




}
