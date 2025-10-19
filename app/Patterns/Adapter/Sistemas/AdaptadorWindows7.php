<?php

namespace App\Patterns\Adapter\Sistemas;

use App\Patterns\Adapter\Interfaces\IArchivo;

class AdaptadorWindows7 implements IArchivo
{
    private Windows7 $windows7;

    public function __construct(Windows7 $windows7)
    {
        $this->windows7 = $windows7;
    }

    public function abrirArchivo(string $nombre): string
    {
        // Adaptamos el método antiguo al nuevo formato
        return $this->windows7->abrirFormatoAntiguo($nombre);
    }
}
