<?php

namespace App\Patterns\Decorator\Notificadores;

use App\Patterns\Decorator\Interfaces\INotificador;

class NotificadorBase implements INotificador
{
    public function enviar(string $mensaje): string
    {
        return "📢 Notificación enviada: $mensaje";
    }
}
