<?php

namespace App\Patterns\Decorator\Controllers;

use App\Http\Controllers\Controller;
use App\Patterns\Decorator\Personajes\Guerrero;
use App\Patterns\Decorator\Personajes\Arquero;

class DecoratorController extends Controller
{
    public function atacarConArmas($personaje, $arma)
    {
        try {
            // Crear personaje base
            $personajeObj = match ($personaje) {
                'guerrero' => new Guerrero(),
                'arquero'  => new Arquero(),
                default => throw new \Exception("Personaje no reconocido"),
            };

            // Validar arma
            $armasValidas = ['espada', 'arco'];
            if (!in_array($arma, $armasValidas)) {
                return response()->json([
                    'error' => "Arma no reconocida: $arma"
                ], 400);
            }

            // Armas base
            $espadaMsg = "Espada Mágica";
            $arcoMsg   = "Arco de Fuego";

            // Construir mensaje según personaje y arma
            $mensaje = "";

            if ($personaje === 'guerrero') {
                if ($arma === 'espada') {
                    $mensaje = "🗡️ Guerrero ataca con su espada con la habilidad $espadaMsg";
                } elseif ($arma === 'arco') {
                    $mensaje = "🗡️ Guerrero ataca con su espada y también usa $arcoMsg";
                }
            }

            if ($personaje === 'arquero') {
                if ($arma === 'arco') {
                    $mensaje = "🏹 Arquero dispara una flecha usando el $arcoMsg";
                } elseif ($arma === 'espada') {
                    $mensaje = "🏹 Arquero dispara una flecha y también está usando $espadaMsg";
                }
            }

            return response()->json([
                'personaje' => $personaje,
                'arma' => $arma,
                'resultado' => $mensaje
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
