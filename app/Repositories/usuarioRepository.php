<?php

namespace App\Repositories;

use App\Models\usuario;
use App\Repositories\BaseRepository;

/**
 * Class usuarioRepository
 * @package App\Repositories
 * @version March 28, 2019, 10:12 pm UTC
*/

class usuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cedula'
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
        return usuario::class;
    }
}
