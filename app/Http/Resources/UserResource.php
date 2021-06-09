<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'idTypeDoc'=> $this->idTypeDoc,
            'numberDoc'=> $this->numberDoc,
            'name'=> $this->name,
            'idTypeSex'=> $this->idTypeSex,
            'age'=> $this->age,
            'email'=> $this->email,
            'password'=> $this->password,
            'idProfile'=> $this->idProfile,
                
        ];
    }
}
