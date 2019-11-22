<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $fillable = [
        'user_id', 'house_id','avatar','from','to','address','phone','message','status'
    ];
}
