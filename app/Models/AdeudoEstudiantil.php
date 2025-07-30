<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdeudoEstudiantil
 *
 * @property $id
 * @property $matricula
 * @property $area
 * @property $tipo_adeudo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AdeudoEstudiantil extends Model
{
    protected $table = 'adeudo_estudiantil';    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'area', 'tipo_adeudo', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Estudiante::class, 'matricula', 'matricula');
    }
    
}
