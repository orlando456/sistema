<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    public $timestamp = false;

    protected $fillable =[
        'rol_id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'detalle',
        'edad',
        'telefono'
    ];

    protected $guarded =[

    ];
}
