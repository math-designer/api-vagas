<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class VagaResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'empresa' => $this->cnpj,
            'descricao' => $this->desc_vaga,
            'quantidade' => $this->numero_vagas
        ];
    }
}
