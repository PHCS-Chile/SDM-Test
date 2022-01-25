<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Evaluacion
 *
 * @package App\Models
 * @version 5
 */
class Evaluacion extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    protected $dateFormat = 'd-m-Y H:i:s';

    public function asignacion()
    {
        return $this->belongsTo(Asignacion::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }

    public function estaCompleta()
    {
        return $this->estado_id > 1 && $this->estado_id < 6;
    }

    public function reportes()
    {
        return $this->belongsToMany(Reporte::class);
    }

    public function bloqueo()
    {
        return $this->hasMany(Bloqueo::class);
    }

    public function cambiarEstado($estado)
    {
        Log::log($this->id, Log::ACCION_CAMBIO_ESTADO, [$this->estado_id, $estado]);
        $this->estado_id = $estado;
        if (Auth::user()->perfil == 1 && $estado == 5) {
            Notificacion::limpiarNotificaciones($this->id);
        } elseif ($estado == 3) {
            Notificacion::notificar($this->id);
        }
    }

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];

}
