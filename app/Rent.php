<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $fillable = [
        'user_id', 'detail_id','avatar','from','to','address','phone','message','status'
    ];
}
