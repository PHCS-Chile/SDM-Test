<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Auth;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function notificaciones()
    {
        if (Auth::user()->perfil !== 1) {
            return back();
        }
        $notificaciones = Notificacion::where('activa', true)->get();
        return view('usuarios.notificaciones', compact('notificaciones'));
    }
}
