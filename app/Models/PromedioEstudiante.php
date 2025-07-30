<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PromedioEstudiante
 *
 * @property $id
 * @property $matricula
 * @property $promedio_cuatrimestral
 * @property $promedio_general
 * @property $periodo_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PromedioEstudiante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'promedio_cuatrimestral', 'promedio_general', 'periodo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Estudiante::class, 'matricula', 'matricula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function periodo()
    {
        return $this->belongsTo(\App\Models\Periodo::class, 'periodo_id', 'id');
    }
    
}
