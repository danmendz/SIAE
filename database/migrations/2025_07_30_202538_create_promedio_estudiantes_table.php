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
        Schema::create('promedio_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 20);
            $table->decimal('promedio_cuatrimestral', 4, 2)->nullable();
            $table->decimal('promedio_general', 4, 2)->nullable();
            $table->unsignedBigInteger('periodo_id');

            $table->foreign('matricula')->references('matricula')->on('estudiantes');
            $table->foreign('periodo_id')->references('id')->on('periodos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promedio_estudiantes');
    }
};
