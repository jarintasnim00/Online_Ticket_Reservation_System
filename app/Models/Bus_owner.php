<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bus_owner
 * @package App\Models
 * @version April 7, 2021, 10:25 am +06
 *
 * @property string $bus_name
 * @property string $registration_no
 * @property string $bus_owner_name
 * @property string $bus_owner_mobile_no
 * @property string $bus_owner_email
 * @property string $nid
 * @property string $address
 */
class Bus_owner extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bus_owners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bus_name',
        'registration_no',
        'bus_owner_name',
        'bus_owner_mobile_no',
        'bus_owner_email',
        'nid',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bus_name' => 'string',
        'registration_no' => 'string',
        'bus_owner_name' => 'string',
        'bus_owner_mobile_no' => 'string',
        'bus_owner_email' => 'string',
        'nid' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bus_name' => 'required|string|max:255',
        'registration_no' => 'required|string|max:255',
        'bus_owner_name' => 'required|string|max:255',
        'bus_owner_mobile_no' => 'required|string|max:255',
        'bus_owner_email' => 'required|string|max:255',
        'nid' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
