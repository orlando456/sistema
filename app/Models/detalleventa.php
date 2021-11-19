<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model
{
    use HasFactory;
    protected $table = 'detalleventa';
    protected $primaryKey = 'detalleventa_id';
    public $timestamp = false;

    protected $fillable =[
        'ventas_id', 
        'producto_id',
        'catidad',
        'precio',
        'total',
        
    ];

    protected $guarded =[

    ];
}
