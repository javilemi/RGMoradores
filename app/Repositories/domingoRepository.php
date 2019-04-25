<?php

namespace App\Repositories;

use App\Models\domingo;
use App\Repositories\BaseRepository;

/**
 * Class domingoRepository
 * @package App\Repositories
 * @version March 31, 2019, 3:15 pm UTC
*/

class domingoRepository extends BaseRepository
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
        return domingo::class;
    }
}
