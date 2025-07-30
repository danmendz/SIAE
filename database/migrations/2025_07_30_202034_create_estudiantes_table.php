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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('matricula', 10)->primary();
            $table->string('nombre', 100);
            $table->string('carrera', 100);
            $table->integer('cuatrimestre');
            $table->tinyInteger('grado');
            $table->string('grupo', 10);
            $table->enum('situacion', ['regular', 'irregular'])->default('regular');
            $table->string('turno', 20);
            $table->unsignedBigInteger('periodo_inscrito');
            $table->enum('estatus_academico', ['activo', 'baja temporal', 'baja definitiva', 'egresado'])->nullable();

            $table->foreign('periodo_inscrito')->references('id')->on('periodos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
