<?php

namespace App\Http\Controllers\ecomerce;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }
}
