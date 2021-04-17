<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked_seat extends Model
{
    use HasFactory;

     public function busesinfo()
    {
        return $this->belongsTo(\App\Models\Businfo::class, 'businfo_id');
    }
}
