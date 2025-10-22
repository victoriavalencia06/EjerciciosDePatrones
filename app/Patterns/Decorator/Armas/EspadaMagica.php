<?php

namespace App\Patterns\Decorator\Armas;

class EspadaMagica extends ArmaDecorator
{
    public function atacar(): string
    {
        $resultado = parent::atacar();
        return $resultado . " ✨ usando Espada Mágica";
    }
}
