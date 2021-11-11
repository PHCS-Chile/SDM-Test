<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $dateFormat = 'd-m-Y H:i:s';

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public static function notificar($evaluacion_id)
    {
        $notificacionActiva = Notificacion::where('evaluacion_id', $evaluacion_id)
            ->where('activa', true)->first();
        if ($notificacionActiva) {
            $notificacionActiva->activa = false;
            $notificacionActiva->save();
        }
        $notificacion = new Notificacion();
        $notificacion->evaluacion_id = $evaluacion_id;
        $notificacion->leida = false;
        $notificacion->activa = true;
        $notificacion->save();
    }

    public static function limpiarNotificaciones($evaluacion_id)
    {
        $notificaciones = Notificacion::where('evaluacion_id', $evaluacion_id)->where('activa', true)->get();
        foreach($notificaciones as $notificacion) {
            $notificacion->activa = false;
            $notificacion->save();
        }
    }

}
