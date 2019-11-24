<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $fillable = [
        'name'];

    public function user($value='')
        {
            return $this->belongsTo('App\House');
        }

    public function houses($value='')
        {
            return $this->hasMany('App\House');
        }
}
