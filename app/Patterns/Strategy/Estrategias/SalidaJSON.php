<?php

namespace App\Patterns\Strategy\Estrategias;

use App\Patterns\Strategy\Interfaces\ISalidaStrategy;

class SalidaJSON implements ISalidaStrategy
{
    public function mostrar(string $mensaje): array
    {
        return [
            'tipo' => 'json',
            'mensaje' => $mensaje
        ];
    }
}
