<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tripcost
 * @package App\Models
 * @version March 18, 2021, 12:48 pm +06
 *
 * @property \App\Models\BookedSeat $bookseat
 * @property \App\Models\Businfo $businfo
 * @property integer $businfo_id
 * @property integer $bookseat_id
 * @property string $fuel
 * @property string $price_per_liter
 * @property string $toll_cost
 * @property string $maintenance
 * @property string $driver_salary
 * @property string $helper_salary
 * @property string $supervisor_salary
 */
class Tripcost extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tripcosts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'businfo_id',
        'bookseat_id',
        'fuel',
        'price_per_liter',
        'toll_cost',
        'maintenance',
        'driver_salary',
        'helper_salary',
        'supervisor_salary',
        'total_seat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'businfo_id' => 'integer',
        'bookseat_id' => 'integer',
        'fuel' => 'string',
        'price_per_liter' => 'string',
        'toll_cost' => 'string',
        'maintenance' => 'string',
        'driver_salary' => 'string',
        'helper_salary' => 'string',
        'supervisor_salary' => 'string',
        'total_seat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'businfo_id' => 'required',
        'bookseat_id' => 'required',
        'fuel' => 'required|string|max:255',
        'price_per_liter' => 'required|string|max:255',
        'toll_cost' => 'required|string|max:255',
        'maintenance' => 'required|string|max:255',
        'driver_salary' => 'required|string|max:255',
        'helper_salary' => 'required|string|max:255',
        'supervisor_salary' => 'required|string|max:255',
        'total_seat' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bookseat()
    {
        return $this->belongsTo(\App\Models\Booked_seat::class, 'bookseat_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bus_info()
    {
        return $this->belongsTo(\App\Models\Businfo::class, 'businfo_id');
    }
}
