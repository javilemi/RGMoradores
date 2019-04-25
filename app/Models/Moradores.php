<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Moradores
 * @package App\Models
 * @version March 30, 2019, 4:15 am UTC
 *
 * @property integer cedula
 * @property string nombres
 * @property string apellidos
 * @property string direccion
 * @property integer telefono
 * @property integer libro
 * @property integer folio
 * @property integer numero
 * @property string tipo
 */
class Moradores extends Model
{
    use SoftDeletes;

    public $table = 'moradores';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'libro',
        'folio',
        'numero',
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cedula' => 'integer',
        'nombres' => 'string',
        'apellidos' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer',
        'libro' => 'integer',
        'folio' => 'integer',
        'numero' => 'integer',
        'tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cedula' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
        'libro' => 'required',
        'folio' => 'required',
        'numero' => 'required',
        'tipo' => 'required'
    ];

    
}
