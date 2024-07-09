<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class CrearCitasMEDICOController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('medico.crear-cita', compact('pacientes'));
    }
}
