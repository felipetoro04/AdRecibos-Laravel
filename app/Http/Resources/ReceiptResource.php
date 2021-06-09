<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReceiptResource extends JsonResource
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
            'idEnterprice'=> $this->idEnterprice,
            'numberReceipt'=> $this->numberReceipt,
            'issueDate'=> $this->issueDate,
            'expirationDate'=> $this->expirationDate,
            'amountPayable'=> $this->amountPayable,
            'idStatus'=> $this->idEstado,
            'idUser'=> $this->idUsuario,                       
        ];
    }
}
