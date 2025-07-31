<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalificacionEstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'matricula' => 'required|string',
			'periodo_calificaciones' => 'required',
			'materia' => 'required|string',
			'profesor' => 'string',
            'p1' => 'numeric',
            'aro1_1' => 'nullable|numeric',
            'p2' => 'numeric',
            'aro2_1' => 'nullable|numeric',
            'p3' => 'numeric',
            'aro3_1' => 'nullable|numeric',
            'ti' => 'numeric',
            'cf' => 'nullable|numeric',
            'are1' => 'nullable|numeric',
            'calificacion_cuatrimestral' => 'numeric',
        ];
    }
}
