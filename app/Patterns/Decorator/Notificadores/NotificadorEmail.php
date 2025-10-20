<?php

namespace App\Patterns\Decorator\Notificadores;

class NotificadorEmail extends NotificadorDecorator
{
    public function enviar(string $mensaje): string
    {
        $resultado = parent::enviar($mensaje);
        return $resultado . " ✉️ También se envió por **Correo Electrónico**.";
    }
}
