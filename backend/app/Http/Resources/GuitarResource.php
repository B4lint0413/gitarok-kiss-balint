<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuitarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->manufacturer." ".$this->model,
            "model" => $this->model,
            "manufacturer" => $this->manufacturer,
            "body" => $this->body,
            "strings" => $this->strings,
            "color" => $this->color
        ];
    }
}
