<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroEnfermeroController extends Controller
{
    public function index()
    {
        return view('admin.registro-enfermeros');
    }
}
