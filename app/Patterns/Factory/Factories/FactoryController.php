<?php

namespace App\Patterns\Factory\Controllers;

use App\Http\Controllers\Controller;
use App\Patterns\Factory\Factories\PersonajeFactory;

class FactoryController extends Controller
{
    public function crearPersonaje(string $nivel)
    {
        try {
            $personaje = PersonajeFactory::crearPersonaje($nivel);

            return response()->json([
                'nivel' => $nivel,
                'ataque' => $personaje->atacar(),
                'velocidad' => $personaje->getVelocidad()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
