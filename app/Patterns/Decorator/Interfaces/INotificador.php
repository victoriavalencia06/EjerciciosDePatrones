<?php

namespace App\Patterns\Decorator\Interfaces;

interface INotificador
{
    public function enviar(string $mensaje): string;
}
