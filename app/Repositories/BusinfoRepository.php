<?php

namespace App\Repositories;

use App\Models\Businfo;
use App\Repositories\BaseRepository;

/**
 * Class BusinfoRepository
 * @package App\Repositories
 * @version February 17, 2021, 4:37 pm UTC
*/

class BusinfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bustyp_id',
        'leaving_from',
        'going_to',
        'name',
        'seattype',
        'seatcapacity',
        'fare',
        'day',
        'description'
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
        return Businfo::class;
    }
}
