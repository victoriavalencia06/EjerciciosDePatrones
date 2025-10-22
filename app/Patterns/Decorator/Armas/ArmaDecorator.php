<?php

namespace App\Patterns\Decorator\Armas;

use App\Patterns\Decorator\Interfaces\IPersonaje;

abstract class ArmaDecorator implements IPersonaje
{
    protected IPersonaje $personaje;

    public function __construct(IPersonaje $personaje)
    {
        $this->personaje = $personaje;
    }

    public function atacar(): string
    {
        return $this->personaje->atacar();
    }
}
