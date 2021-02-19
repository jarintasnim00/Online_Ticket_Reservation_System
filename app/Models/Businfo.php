<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Businfo
 * @package App\Models
 * @version February 17, 2021, 4:37 pm UTC
 *
 * @property \App\Models\Bustype $bustyp
 * @property integer $bustyp_id
 * @property string $leaving_from
 * @property string $going_to
 * @property string $name
 * @property string $seattype
 * @property string $seatcapacity
 * @property string $fare
 * @property string $day
 * @property string $description
 */
class Businfo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'businfos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bustyp_id',
        'leaving_from',
        'going_to',
        'name',
        'seattype',
        'seatcapacity',
        'fare',
        'day',
        'departure_time',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bustyp_id' => 'integer',
        'leaving_from' => 'string',
        'going_to' => 'string',
        'name' => 'string',
        'seattype' => 'string',
        'seatcapacity' => 'string',
        'fare' => 'string',
        'day' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bustyp_id' => 'required',
        'leaving_from' => 'required|string|max:255',
        'going_to' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'seattype' => 'required|string|max:255',
        'seatcapacity' => 'required|string|max:255',
        'fare' => 'required|string|max:255',
        'day' => 'required|string|max:255',
        'departure_time' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bustyp()
    {
        return $this->belongsTo(\App\Models\Bustype::class, 'bustyp_id');
    }
    public function findTicket($trip_id, $seat_number)
    {
          return json_encode(["trip_id"=> $trip_id,"seat_number" => $seat_number]);
        // $str = strval($seat_number);
        $sql = "select * from sell_tickets where trip_id=" . $trip_id . " and seat_number='" . $seat_number . "'";
        // dd($sql);
         return $sql;
        //$result = json_encode(DB::select(DB::raw($sql)));
        return $result;
        // return json_encode(SellTicket::where("trip_id", $trip_id)->where("seat_number", strval($seat_number))->get()->first());
    }
    
}
