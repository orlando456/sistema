<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodeproducto extends Model
{
    use HasFactory;
    protected $table = 'tipodeproducto';
    protected $primaryKey = 'tipo_id';
    public $timestamp = false;

    protected $fillable =[
        'nombre',
        'tipo',
        'descripcion'
    ];

    protected $guarded =[

    ];
}
