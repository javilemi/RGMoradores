<?php

namespace App\Repositories;

use App\Models\Almacenes;
use App\Repositories\BaseRepository;

/**
 * Class AlmacenesRepository
 * @package App\Repositories
 * @version March 29, 2019, 9:28 pm UTC
*/

class AlmacenesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Almacenes::class;
    }
}
