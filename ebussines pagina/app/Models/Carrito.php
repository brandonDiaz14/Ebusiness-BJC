<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Carrito extends Model
{
    use HasFactory;
    protected $table='carrito';
    protected $primaryKey='id_carrito';
    protected $fillable= [
        'nombre_poducto',
        'precio_producto',
        'usuario'
    ];
    public $timestamps = false;
}