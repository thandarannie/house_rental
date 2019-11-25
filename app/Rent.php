<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $fillable = [
        'user_id', 'house_id','avatar','from','to','address','phone','message','status'
    ];
    public function user($value='')
        {
            return $this->belongsTo('App\User');
        }

    public function house($value='')
        {
            return $this->belongsTo('App\House');
        }
}
