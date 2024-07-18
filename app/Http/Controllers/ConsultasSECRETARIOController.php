<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class ConsultasSECRETARIOController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('secretario.consultas', compact('citas'));
    }
}
