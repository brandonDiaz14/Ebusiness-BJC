<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primaryKey='id_produ';
    protected $fillable= [
        
        'Nom_produ',
        'Tipo_produ',
        'cant_produ',
        'precio',
        'categoria_id_categoria'
    ];
    public $timestamps = false;
}
