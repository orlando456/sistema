<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';
    protected $primaryKey = 'inventario_id';
    public $timestamp = false;

    protected $fillable =[
        'id',
        'producto_id',
        'compras_id',
        'ventas_id'
       
    ];

    protected $guarded =[

    ];
}
