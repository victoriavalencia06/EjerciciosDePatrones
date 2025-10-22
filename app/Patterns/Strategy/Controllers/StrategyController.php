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

        try {
            $context = match ($tipo) {
                'consola' => new MensajeContext(new SalidaConsola()),
                'json'    => new MensajeContext(new SalidaJSON()),
                'txt'     => new MensajeContext(new SalidaTXT()),
                default   => throw new \Exception("Tipo de salida no válido: $tipo"),
            };

            $resultado = $context->ejecutar($mensaje);

            return response()->json([
                'tipo' => $tipo,
                'resultado' => $resultado
            ], 200, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400, [], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
    }
}
