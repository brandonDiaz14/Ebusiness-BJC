<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Imagen extends Model
{
    use HasFactory;
    protected $table='imagen';
    protected $primaryKey='id_imagen';
    protected $fillable= [
        
        'nombre_imagen',
        'producto_id_produ',
    ];
    public $timestamps = false;
}
