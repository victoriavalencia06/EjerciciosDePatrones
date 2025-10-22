<?php

namespace App\Patterns\Strategy\Interfaces;

interface ISalidaStrategy
{
    // Mostrar un mensaje según la estrategia.
    public function mostrar(string $mensaje): mixed;
}
