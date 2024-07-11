<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CrearCitasSecretarioController extends Controller
{
    public function index(Request $request)
    {
        $servicio = $request->input('servicio');
        $pacientes = Paciente::all(); // Obtener todos los pacientes
        $citas = Cita::all();
        return view('secretario.crear-cita', compact('servicio', 'pacientes', 'citas'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pacientes' => 'required|string|max:255',
            'hora' => 'required|date_format:H:i',
            'fecha' => 'required|date',
            'servicio' => 'required|string|max:255',
            'Descripcion' => 'required|string',
        ]);

        Cita::create($validateData);
        return redirect()->route('secretario.crear-cita')->with('success', 'Cita creada con éxito');
    }
}
