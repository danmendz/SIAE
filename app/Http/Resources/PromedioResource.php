<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromedioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'periodo' => $this->periodo ? $this->periodo->nombre_periodo : null,
            'promedio_cuatrimestral' => $this->promedio_cuatrimestral,
            'promedio_general' => $this->promedio_general,
        ];
    }
}
