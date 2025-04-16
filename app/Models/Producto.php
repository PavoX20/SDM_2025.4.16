<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Producto extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['nombre', 'precio', 'descripcion', 'sucursal_id'];

    protected static function booted()
    {
        static::creating(function ($producto) {
            $producto->id = (string) Str::uuid();
        });
    }
}
