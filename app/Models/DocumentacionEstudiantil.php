<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentacionEstudiantil
 *
 * @property $id
 * @property $matricula
 * @property $documento
 * @property $observaciones
 * @property $original
 * @property $copia
 * @property $notas
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentacionEstudiantil extends Model
{
    protected $table = 'documentacion_estudiantil';   
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['matricula', 'documento', 'observaciones', 'original', 'copia', 'notas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudiante()
    {
        return $this->belongsTo(\App\Models\Estudiante::class, 'matricula', 'matricula');
    }
    
}
