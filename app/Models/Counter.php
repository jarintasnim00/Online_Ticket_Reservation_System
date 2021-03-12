<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Counter
 * @package App\Models
 * @version February 28, 2021, 6:22 pm UTC
 *
 * @property string $counter_name
 * @property string $contact_num
 * @property string $location
 */
class Counter extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'counters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'counter_name',
        'contact_num',
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'counter_name' => 'string',
        'contact_num' => 'string',
        'location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'counter_name' => 'required|string|max:255',
        'contact_num' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
