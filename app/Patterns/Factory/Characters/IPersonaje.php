<?php

namespace App\Patterns\Factory\Characters;

interface IPersonaje
{
    public function atacar(): string;
    public function getVelocidad(): int;
}
