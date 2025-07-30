<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
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
			'nombre' => 'required|string',
			'carrera' => 'required|string',
			'cuatrimestre' => 'required',
			'grado' => 'required',
			'grupo' => 'required|string',
			'situacion' => 'required',
			'turno' => 'required|string',
			'periodo_inscrito' => 'required',
            'estatus_academico' => 'required',
        ];
    }
}
