<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnterpriceResource extends JsonResource
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
            'bussinessName'=> $this->bussinessName,
            'idTypeDoc'=> $this->idTypeDoc,
            'numberDoc'=> $this->numberDoc,           
        ];
    }
}
