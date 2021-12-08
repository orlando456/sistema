<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $primaryKey = 'id';
    public $timestamp = false;

    protected $fillable =[
        'id_cliente',
        'producto_id',
        'descripcion'
    ];

    protected $guarded =[

    ];
}
