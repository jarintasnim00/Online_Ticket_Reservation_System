<?php

namespace App\Repositories;

use App\Models\Bustype;
use App\Repositories\BaseRepository;

/**
 * Class BustypeRepository
 * @package App\Repositories
 * @version February 17, 2021, 4:30 pm UTC
*/

class BustypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bustypename'
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
        return Bustype::class;
    }
}
