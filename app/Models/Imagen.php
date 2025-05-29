<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagen extends Model
{
    use HasFactory;

    protected $fillable = ['ruta', 'producto_id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
