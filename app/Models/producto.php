<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'producto_id';
    public $timestamp = false;

    protected $fillable =[
        'tipo_id',
        'proveedores_id',
        'nombre',
        'marca',
        'precio_venta',
        'talla',
        'color',
        'stock',
        'descripcion'
    ];

    protected $guarded =[

    ];

}
