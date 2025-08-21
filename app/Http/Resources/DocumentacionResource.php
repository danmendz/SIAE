<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentacionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'documento' => $this->documento,
            'observaciones' => $this->observaciones,
            'original' => $this->original,
            'copia' => $this->copia,
            'notas' => $this->notas,
        ];
    }
}
