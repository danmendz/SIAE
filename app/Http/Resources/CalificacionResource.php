<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CalificacionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'periodo_calificaciones' => $this->periodo ? $this->periodo->nombre_periodo : null,
            'materia' => $this->materia,
            'profesor' => $this->profesor,
            'p1' => $this->p1,
            'p2' => $this->p2,
            'p3' => $this->p3,
            'ti' => $this->ti,
            'cf' => $this->cf,
            'calificacion_cuatrimestral' => $this->calificacion_cuatrimestral,
        ];
    }
}
