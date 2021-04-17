<?php

namespace App\Repositories;

use App\Models\Tripcost;
use App\Repositories\BaseRepository;

/**
 * Class TripcostRepository
 * @package App\Repositories
 * @version March 18, 2021, 12:48 pm +06
*/

class TripcostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'businfo_id',
        'bookseat_id',
        'fuel',
        'price_per_liter',
        'toll_cost',
        'maintenance',
        'driver_salary',
        'helper_salary',
        'supervisor_salary'
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
        return Tripcost::class;
    }
}
