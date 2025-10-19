<?php

namespace App\Patterns\Factory\Factories;

use App\Patterns\Factory\Characters\Esqueleto;
use App\Patterns\Factory\Characters\Zombi;
use App\Patterns\Factory\Characters\IPersonaje;

class PersonajeFactory
{
    public static function crearPersonaje(string $nivel): IPersonaje
    {
        switch (strtolower($nivel)) {
            case 'facil':
                return new Esqueleto();
            case 'dificil':
                return new Zombi();
            default:
                throw new \Exception("Nivel no reconocido. Usa 'facil' o 'dificil'.");
        }
    }
}
