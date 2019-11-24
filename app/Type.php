<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     protected $fillable = [
        'name'
    ];

    public function user($value='')
        {
            return $this->belongsTo('App\User');
        }

        public function houses($value='')
        {
            return $this->hasMany('App\House');
        }
}
