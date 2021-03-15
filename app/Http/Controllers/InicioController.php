<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index (){
        //Obtener los productos mas nuevos
        //$nuevas = Comunicado::orderBy('created_at', 'DESC')->get();
        $nuevas = Producto::latest()->take(5)->get();
        $productos = DB::table('productos')->latest()->paginate(6);
        return view('inicio.index', compact('nuevas', 'productos'));
    }
}
