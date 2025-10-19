<?php

namespace App\Patterns\Factory\Characters;

class Esqueleto implements IPersonaje
{
    public function atacar(): string
    {
        return "💀 Esqueleto ataca con flechas desde lejos.";
    }

    public function getVelocidad(): int
    {
        return 8;
    }
}
