<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PasResource extends JsonResource
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
            'Šifra - ' => $this->sifra,
            'Rasa - ' => $this->rasa,
            'Godine - ' => $this->godine,
            'Stanovnik - ' => new StanovnikResource($this->stanovnik_id),
        ];
    }
}
