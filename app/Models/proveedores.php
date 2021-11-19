<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $primaryKey = 'proveedores_id';
    public $timestamp = false;

    protected $fillable =[
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'ci',
        'edad',
        'telefono'
    ];

    protected $guarded =[

    ];
}
