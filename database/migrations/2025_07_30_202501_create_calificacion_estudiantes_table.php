<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calificacion_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 20);
            $table->unsignedBigInteger('periodo_calificaciones');
            $table->string('materia', 100);
            $table->string('profesor', 100)->nullable();

            $table->decimal('p1', 4, 2)->nullable();
            $table->decimal('aro1_1', 4, 2)->nullable();
            $table->decimal('p2', 4, 2)->nullable();
            $table->decimal('aro2_1', 4, 2)->nullable();
            $table->decimal('p3', 4, 2)->nullable();
            $table->decimal('aro3_1', 4, 2)->nullable();
            $table->decimal('ti', 4, 2)->nullable();
            $table->decimal('cf', 4, 2)->nullable();
            $table->decimal('are1', 4, 2)->nullable();
            $table->decimal('calificacion_cuatrimestral', 4, 2)->nullable();

            $table->foreign('matricula')->references('matricula')->on('estudiantes');
            $table->foreign('periodo_calificaciones')->references('id')->on('periodos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacion_estudiantes');
    }
};
