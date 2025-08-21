<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstudianteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'matricula' => $this->matricula,
            'nombre' => $this->nombre,
            'carrera' => $this->carrera,
            'cuatrimestre' => $this->cuatrimestre,
            'grado' => $this->grado,
            'grupo' => $this->grupo,
            'situacion' => $this->situacion,
            'turno' => $this->turno,
            'periodo_inscrito' => $this->periodo ? $this->periodo->nombre_periodo : null,
            'estatus_academico' => $this->estatus_academico,
        ];
    }
}
