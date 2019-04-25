<?php

namespace App\Repositories;

use App\Models\Moradores;
use App\Repositories\BaseRepository;

/**
 * Class MoradoresRepository
 * @package App\Repositories
 * @version March 30, 2019, 4:15 am UTC
*/

class MoradoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Moradores::class;
    }
}
