<?php

namespace App\Repositories;

use App\Models\sabado;
use App\Repositories\BaseRepository;

/**
 * Class sabadoRepository
 * @package App\Repositories
 * @version March 31, 2019, 3:20 pm UTC
*/

class sabadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return sabado::class;
    }
}
