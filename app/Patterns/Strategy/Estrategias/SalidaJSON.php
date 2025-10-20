<?php

namespace App\Patterns\Strategy\Estrategias;

use App\Patterns\Strategy\Interfaces\ISalidaStrategy;

class SalidaJSON implements ISalidaStrategy
{
    public function mostrar(string $mensaje): string
    {
        return json_encode([
            'tipo' => 'json',
            'mensaje' => $mensaje
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
