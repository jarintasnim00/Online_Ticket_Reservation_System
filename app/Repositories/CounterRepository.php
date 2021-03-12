<?php

namespace App\Repositories;

use App\Models\Counter;
use App\Repositories\BaseRepository;

/**
 * Class CounterRepository
 * @package App\Repositories
 * @version February 28, 2021, 6:22 pm UTC
*/

class CounterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'counter_name',
        'contact_num',
        'location'
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
        return Counter::class;
    }
}
