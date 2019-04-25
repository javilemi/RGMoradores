<?php

namespace App\Repositories;

use App\Models\Persona;
use App\Repositories\BaseRepository;

/**
 * Class PersonaRepository
 * @package App\Repositories
 * @version March 29, 2019, 1:09 pm UTC
*/

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedula',
        'nombre'
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
        return Persona::class;
    }
}
