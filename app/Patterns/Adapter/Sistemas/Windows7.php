<?php

namespace App\Patterns\Adapter\Sistemas;

class Windows7
{
    public function abrirFormatoAntiguo(string $nombre): string
    {
        return "📂 Archivo '$nombre' abierto con compatibilidad de Windows 7.";
    }
}
