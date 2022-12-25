<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StanovnikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID - ' => $this->id,
            'Ime - ' => $this->ime,
            'Prezime - ' => $this->prezime,
            'JMBG - ' => $this->jmbg,
            'Adresa - ' => $this->adresa,
            'Broj ljubimaca - ' => $this->broj_ljubimaca,
            'Opstina - ' => new OpstinaResource($this->opstina_id)
        ];
    }
}
