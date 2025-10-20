<?php

namespace App\Patterns\Decorator\Controllers;

use App\Http\Controllers\Controller;
use App\Patterns\Decorator\Notificadores\NotificadorBase;
use App\Patterns\Decorator\Notificadores\NotificadorEmail;
use App\Patterns\Decorator\Notificadores\NotificadorSMS;
use App\Patterns\Decorator\Notificadores\NotificadorWhatsApp;

class DecoratorController extends Controller
{
    public function enviarNotificacion($tipo)
    {
        $mensaje = "El sistema se actualizó correctamente.";

        $notificador = new NotificadorBase();

        switch ($tipo) {
            case 'email':
                $notificador = new NotificadorEmail($notificador);
                break;
            case 'sms':
                $notificador = new NotificadorSMS($notificador);
                break;
            case 'whatsapp':
                $notificador = new NotificadorWhatsApp($notificador);
                break;
            case 'todos':
                $notificador = new NotificadorWhatsApp(
                    new NotificadorSMS(
                        new NotificadorEmail($notificador)
                    )
                );
                break;
        }

        return response()->json([
            'tipo' => $tipo,
            'resultado' => $notificador->enviar($mensaje),
        ]);
    }
}
