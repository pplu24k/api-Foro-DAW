<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subforo extends Model
{
    use HasFactory;


    protected $fillable = [

        'nombre'

    ];

    public $timestamps = false;

    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
