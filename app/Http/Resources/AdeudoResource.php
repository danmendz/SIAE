<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdeudoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'area' => $this->area,
            'tipo_adeudo' => $this->tipo_adeudo,
            'descripcion' => $this->descripcion,
        ];
    }
}
