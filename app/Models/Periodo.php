<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 * @package App\Models
 * @version 2
 */
class Periodo extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $dateFormat = 'd-m-Y H:i:s';

    const ACTIVO = 1;
    const INACTIVO = 2;

    public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }
}
