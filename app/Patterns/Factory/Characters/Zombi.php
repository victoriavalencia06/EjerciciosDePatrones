<?php

namespace App\Patterns\Factory\Characters;

class Zombi implements IPersonaje
{
    public function atacar(): string
    {
        return "🧟‍♂️ Zombi ataca cuerpo a cuerpo con mordidas.";
    }

    public function getVelocidad(): int
    {
        return 4;
    }
}
