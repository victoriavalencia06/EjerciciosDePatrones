<?php

namespace App\Patterns\Strategy\Estrategias;

use App\Patterns\Strategy\Interfaces\ISalidaStrategy;

class SalidaConsola implements ISalidaStrategy
{
    public function mostrar(string $mensaje): string
    {
        return "🖥️ Mostrando en consola: $mensaje";
    }
}
