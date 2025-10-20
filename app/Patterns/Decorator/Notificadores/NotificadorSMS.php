<?php

namespace App\Patterns\Decorator\Notificadores;

class NotificadorSMS extends NotificadorDecorator
{
    public function enviar(string $mensaje): string
    {
        $resultado = parent::enviar($mensaje);
        return $resultado . " 📱 También se envió por **SMS**.";
    }
}
