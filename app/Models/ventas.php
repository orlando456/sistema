<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table = 'inventario';
    protected $primaryKey = 'inventario_id';
    public $timestamp = false;

    protected $fillable =[
        'id',
        'id_cliente',
        'num_comprobante',
        'total',
        'cambio'
    ];

    protected $guarded =[

    ];
}
