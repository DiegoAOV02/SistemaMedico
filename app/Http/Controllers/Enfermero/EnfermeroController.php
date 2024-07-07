<?php

namespace App\Http\Controllers\Enfermero;

use App\Http\Controllers\Controller;
use App\Models\Enfermero;
use Illuminate\Http\Request;

class EnfermeroController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', compact('enfermeros'));
    }
}
