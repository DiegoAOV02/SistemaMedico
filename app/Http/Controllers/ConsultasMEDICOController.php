<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ConsultasMEDICOController extends Controller
{
    public function index()
    {
        $servicios = Servicios::all();
        $productos = Producto::all();
        return view('medico.consultas', compact('servicios', 'productos'));
    }
}
