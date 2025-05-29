<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    public function compradoresFrecuentes()
    {
        return $this->hasManyThrough(User::class, Venta::class, 
            'producto_id', 'id', 'id', 'comprador_id')
            ->join('productos', 'ventas.producto_id', '=', 'productos.id')
            ->whereColumn('productos.id', 'ventas.producto_id')
            ->select('users.*', DB::raw('count(*) as total'))
            ->groupBy('users.id')
            ->orderByDesc('total');
    }
}

