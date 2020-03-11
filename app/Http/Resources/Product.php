<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id'=> $this->id,
            'nome' => $this->nome,
            'descricao' =>$this->descricao,
            'quantidade' =>$this->quantidade,
            'preco'=> $this->preco,
            'user_id'=>$this->user_id,
            'create_at'=> $this->create_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
