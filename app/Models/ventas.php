<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    protected $primaryKey = 'ventas_id';
    public $timestamp = false;

    protected $fillable =[
        'id',
        'id_cliente',
        'producto_id',
        'tipo_id',
        'cantidad',
        'total',
        'cambio'
    ];

    protected $guarded =[

    ];
}
