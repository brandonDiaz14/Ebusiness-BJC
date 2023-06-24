<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Orden extends Model
{
    use HasFactory;
    protected $table='orden';
    protected $primaryKey='id_orden';
    protected $fillable= [
        
        'referencia_orden',
        'direccion',
        'cantidad',
        'precio',
        'cliente_id',
        'producto'
    ];
    public $timestamps = false;
}
