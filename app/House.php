<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'user_id','township_id','type_id','title','area','price','room','street','hno','image','phone','status','description'];
}
