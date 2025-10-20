<?php

namespace App\Patterns\Strategy\Controllers;

use App\Http\Controllers\Controller;
use App\Patterns\Strategy\Context\MensajeContext;
use App\Patterns\Strategy\Estrategias\SalidaConsola;
use App\Patterns\Strategy\Estrategias\SalidaJSON;
use App\Patterns\Strategy\Estrategias\SalidaTXT;

class StrategyController extends Controller
{
    public function mostrar($tipo)
    {
        $mensaje = "Bienvenido al sistema de estrategias de salida.";

        $context = match ($tipo) {
            'consola' => new MensajeContext(new SalidaConsola()),
            'json' => new MensajeContext(new SalidaJSON()),
            'txt' => new MensajeContext(new SalidaTXT()),
            default => throw new \Exception("Tipo de salida no válido."),
        };

        return response()->json([
            'tipo' => $tipo,
            'resultado' => $context->ejecutar($mensaje)
        ]);
    }
}
