<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    public $timestamp = true;

    protected $fillable =[
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'tipo',
        'ci',
        'edad',
        'telefono',
        'sexo',
        'nacionalidad'
    ];

    protected $guarded =[

    ];
}