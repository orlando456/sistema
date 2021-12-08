<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $table = 'compra';
    protected $primaryKey = 'compras_id';
    public $timestamp = false;

    protected $fillable =[
        'id',
        'producto_id',
        'proveedores_id',
        'cantidad',
        'precio_unitario',
        'total',
    ];

    protected $guarded =[

    ];
    
}
