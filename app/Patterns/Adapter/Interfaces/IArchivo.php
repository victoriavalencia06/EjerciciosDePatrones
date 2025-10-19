<?php

namespace App\Patterns\Adapter\Interfaces;

interface IArchivo
{
    public function abrirArchivo(string $nombre): string;
}
