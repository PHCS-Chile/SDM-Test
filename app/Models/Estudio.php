<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudio
 * @package App\Models
 * @version 2
 */
class Estudio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dateFormat = 'd-m-Y H:i:s';

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

    public function pauta()
    {
        return $this->belongsTo(Pauta::class);
    }

    public function asignacions()
    {
        return $this->hasMany(Asignacion::class);
    }

}
