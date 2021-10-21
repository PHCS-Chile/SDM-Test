<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 * @package App\Models
 * @version 2
 */
class Estado extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 2;
    protected $dateFormat = 'd-m-Y H:i:s';

    public function evaluacions()
    {
        return $this->hasMany(Evaluacion::class);
    }

}
