<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OpstinaResource extends JsonResource
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
            'Naziv - ' => $this->naziv,
            'Grad - ' => $this->grad,
            'Broj stanovnika - ' => $this->broj_stanovnika
        ];
    }
}
