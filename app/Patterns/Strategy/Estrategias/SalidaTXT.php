<?php

namespace App\Patterns\Strategy\Estrategias;

use App\Patterns\Strategy\Interfaces\ISalidaStrategy;

class SalidaTXT implements ISalidaStrategy
{
    public function mostrar(string $mensaje): string
    {
        $ruta = storage_path('app/mensaje.txt');
        file_put_contents($ruta, $mensaje);
        return "📄 Mensaje guardado en archivo TXT: $ruta";
    }
}
