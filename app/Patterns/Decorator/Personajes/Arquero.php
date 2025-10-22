<?php

namespace App\Patterns\Decorator\Personajes;

use App\Patterns\Decorator\Interfaces\IPersonaje;

class Arquero implements IPersonaje
{
    public function atacar(): string
    {
        return "🏹 Arquero dispara una flecha";
    }
}
