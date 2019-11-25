<?php

namespace App\Http\Resources;
use App\User;
use App\Township;
use App\Type;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Township as TownshipResource;
use App\Http\Resources\Type as TypeResource;

class House extends JsonResource
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
            'township' => new TownshipResource(Township::find($this->township_id)),
            'types' => new TypeResource(Type::find($this->type_id)),
            'title' =>$this->title,
            'area' =>$this->area,
            'price' =>$this->price,
            'room' =>$this->room,
            'street' =>$this->street,
            'hno' =>$this->hno,
            'image' =>$this->image,
            'phone' =>$this->phone,
            'status' =>$this->status,
            'description' =>$this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
