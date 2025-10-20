<?php

namespace App\Patterns\Strategy\Interfaces;

interface ISalidaStrategy
{
    public function mostrar(string $mensaje): string;
}
