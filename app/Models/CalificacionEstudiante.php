<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CalificacionEstudiante
 *
 * @property $id
 * @property $matricula
 * @property $periodo_calificaciones
 * @property $materia
 * @property $profesor
 * @property $p1
 * @property $aro1_1
 * @property $p2
 * @property $aro2_1
 * @property $p3
 * @property $aro3_1
 * @property $ti
 * @property $cf
 * @property $are1
 * @property $calificacion_cuatrimestral
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CalificacionEstudiante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'periodo_calificaciones', 'materia', 'profesor', 'p1', 'aro1_1', 'p2', 'aro2_1', 'p3', 'aro3_1', 'ti', 'cf', 'are1', 'calificacion_cuatrimestral'];


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
        return $this->belongsTo(\App\Models\Periodo::class, 'periodo_calificaciones', 'id');
    }
    
}
