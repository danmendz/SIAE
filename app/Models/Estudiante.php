<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $matricula
 * @property $nombre
 * @property $carrera
 * @property $cuatrimestre
 * @property $grado
 * @property $grupo
 * @property $situacion
 * @property $turno
 * @property $periodo_inscrito
 * @property $estatus_academico
 * @property $created_at
 * @property $updated_at
 *
 * @property Periodo $periodo
 * @property AdeudoEstudiantil[] $adeudoEstudiantils
 * @property CalificacionEstudiante[] $calificacionEstudiantes
 * @property DocumentacionEstudiantil[] $documentacionEstudiantils
 * @property PromedioEstudiante[] $promedioEstudiantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    protected $primaryKey = 'matricula';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'nombre', 'carrera', 'cuatrimestre', 'grado', 'grupo', 'situacion', 'turno', 'periodo_inscrito', 'estatus_academico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function periodo()
    {
        return $this->belongsTo(\App\Models\Periodo::class, 'periodo_inscrito', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adeudoEstudiantils()
    {
        return $this->hasMany(\App\Models\AdeudoEstudiantil::class, 'matricula', 'matricula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacionEstudiantes()
    {
        return $this->hasMany(\App\Models\CalificacionEstudiante::class, 'matricula', 'matricula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentacionEstudiantils()
    {
        return $this->hasMany(\App\Models\DocumentacionEstudiantil::class, 'matricula', 'matricula');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promedioEstudiantes()
    {
        return $this->hasMany(\App\Models\PromedioEstudiante::class, 'matricula', 'matricula');
    }
    
}
