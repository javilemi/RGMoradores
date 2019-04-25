<?php

namespace App\Repositories;

use App\Models\Gente;
use App\Repositories\BaseRepository;

/**
 * Class GenteRepository
 * @package App\Repositories
 * @version March 29, 2019, 1:39 pm UTC
*/

class GenteRepository extends BaseRepository
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
        return Gente::class;
    }
}
