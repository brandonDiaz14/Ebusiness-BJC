<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
    protected $table='municipio';
    protected $primaryKey='id';
    protected $fillable= ['name','departamentos_id'];
    public $timestamps = false;
}
