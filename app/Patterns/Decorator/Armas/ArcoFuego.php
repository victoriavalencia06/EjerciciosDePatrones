<?php

namespace App\Patterns\Decorator\Armas;

class ArcoFuego extends ArmaDecorator
{
    public function atacar(): string
    {
        $resultado = parent::atacar();
        return $resultado . " 🔥 usando Arco de Fuego";
    }
}
