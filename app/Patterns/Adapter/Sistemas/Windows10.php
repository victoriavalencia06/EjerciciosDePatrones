<?php

namespace App\Patterns\Adapter\Sistemas;

use App\Patterns\Adapter\Interfaces\IArchivo;

class Windows10 implements IArchivo
{
    public function abrirArchivo(string $nombre): string
    {
        return "✅ Archivo '$nombre' abierto correctamente en Windows 10.";
    }
}
