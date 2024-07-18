<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    public function show($id)
    {
        $servicio = Servicios::findOrFail($id);
        if($servicio->content) {
            return new Response($servicio->content, 200, [
                'Content-Type' => 'image/jpeg', // Cambia el tipo de contenido según el tipo de imagen
                'Content-Length' => 'inline; filename="image.jpg"'
            ]);
        } else {
            return response()->file(public_path('images/Logo.png'));
        }
    }
}
