<?php

namespace App\Patterns\Decorator\Personajes;

use App\Patterns\Decorator\Interfaces\IPersonaje;

class Guerrero implements IPersonaje
{
    public function atacar(): string
    {
        return "🗡️ Guerrero ataca con su espada";
    }
}
