<?php

namespace App\Repositories;

use App\Models\nanda;
use App\Repositories\BaseRepository;

/**
 * Class nandaRepository
 * @package App\Repositories
 * @version March 31, 2019, 3:23 pm UTC
*/

class nandaRepository extends BaseRepository
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
        return nanda::class;
    }
}
