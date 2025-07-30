<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $mes_inicio
 * @property $mes_fin
 * @property $anio
 * @property $created_at
 * @property $updated_at
 *
 * @property CalificacionEstudiante[] $calificacionEstudiantes
 * @property Estudiante[] $estudiantes
 * @property PromedioEstudiante[] $promedioEstudiantes
 * @property BecaActiva[] $becaActivas
 * @property PublicacionBeca[] $publicacionBecas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['mes_inicio', 'mes_fin', 'anio'];

    protected $appends = ['nombre_periodo'];

    public function getNombrePeriodoAttribute(): string
    {
        $meses = [
            1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril',
            5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre',
        ];

        return $meses[$this->mes_inicio] . '-' . $meses[$this->mes_fin] . ' ' . $this->anio;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacionEstudiantes()
    {
        return $this->hasMany(\App\Models\CalificacionEstudiante::class, 'id', 'periodo_calificaciones');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudiantes()
    {
        return $this->hasMany(\App\Models\Estudiante::class, 'id', 'periodo_inscrito');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promedioEstudiantes()
    {
        return $this->hasMany(\App\Models\PromedioEstudiante::class, 'id', 'periodo_id');
    }
    
}
