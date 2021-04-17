<?php

namespace App\Repositories;

use App\Models\Bus_owner;
use App\Repositories\BaseRepository;

/**
 * Class Bus_ownerRepository
 * @package App\Repositories
 * @version April 7, 2021, 10:25 am +06
*/

class Bus_ownerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bus_name',
        'registration_no',
        'bus_owner_name',
        'bus_owner_mobile_no',
        'bus_owner_email',
        'nid',
        'address'
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
        return Bus_owner::class;
    }
}
