<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
use App\Http\Resources\User as UserResource;
use App\House;
use App\Http\Resources\User as HouseResource;

class Rent extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return[
            'id' => $this->id,
            'user' =>new UserResource(User::find($this->user_id)),
            'house' => new HouseResource(House::find($this->house_id)),
            'from' =>$this->from,
            'to' =>$this->to,
            'address' =>$this->address,
            'phone' =>$this->phone,
            'message' =>$this->message,
            'status' =>$this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
