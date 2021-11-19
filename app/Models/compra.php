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
        'user_id', 
        
        'producto_id',
        'cantidad',
        'precio',
        'total',
    ];

    protected $guarded =[

    ];
    
}
