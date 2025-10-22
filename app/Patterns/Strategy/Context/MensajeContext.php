<?php

namespace App\Patterns\Strategy\Context;

use App\Patterns\Strategy\Interfaces\ISalidaStrategy;

class MensajeContext
{
    private ISalidaStrategy $strategy;

    public function __construct(ISalidaStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(ISalidaStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function ejecutar(string $mensaje): mixed
    {
        return $this->strategy->mostrar($mensaje);
    }
}
