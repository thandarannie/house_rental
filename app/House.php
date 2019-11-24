<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'user_id','township_id','type_id','title','area','price','room','street','hno','image','phone','status','description'];

        public function user($value='')
        {
            return $this->belongsTo('App\User');
        }

        public function township($value='')
        {
            return $this->belongsTo('App\Township');
        }

        public function type($value='')
        {
            return $this->belongsTo('App\Type');
        }

        public function rent($value='')
        {
            return $this->hasOne('App\Rent');
        }
}
