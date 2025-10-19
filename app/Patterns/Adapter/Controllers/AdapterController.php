<?php

namespace App\Patterns\Adapter\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patterns\Adapter\Sistemas\Windows7;
use App\Patterns\Adapter\Sistemas\Windows10;
use App\Patterns\Adapter\Sistemas\AdaptadorWindows7;
use App\Patterns\Adapter\Interfaces\IArchivo;

class AdapterController extends Controller
{
    public function abrirArchivo(string $version, string $nombre)
    {
        try {
            $sistema = $this->obtenerSistema($version);
            return response()->json([
                'version' => $version,
                'resultado' => $sistema->abrirArchivo($nombre),
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    private function obtenerSistema(string $version): IArchivo
    {
        return match ($version) {
            'win10' => new Windows10(),
            'win7'  => new AdaptadorWindows7(new Windows7()),
            default => throw new \Exception("Versión de Windows no reconocida: $version"),
        };
    }
}
