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
        Schema::create('documentacion_estudiantil', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 20);
            $table->string('documento', 100);
            $table->string('observaciones', 100)->nullable();
            $table->boolean('original')->default(false);
            $table->boolean('copia')->default(false);
            $table->text('notas')->nullable();

            $table->foreign('matricula')->references('matricula')->on('estudiantes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentacion_estudiantil');
    }
};
