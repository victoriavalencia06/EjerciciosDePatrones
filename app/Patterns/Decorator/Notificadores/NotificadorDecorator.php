<?php

namespace App\Patterns\Decorator\Notificadores;

use App\Patterns\Decorator\Interfaces\INotificador;

abstract class NotificadorDecorator implements INotificador
{
    protected INotificador $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function enviar(string $mensaje): string
    {
        return $this->notificador->enviar($mensaje);
    }
}
