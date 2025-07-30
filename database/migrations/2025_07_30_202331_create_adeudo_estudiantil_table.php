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
        Schema::create('adeudo_estudiantil', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 20);
            $table->string('area', 150);
            $table->string('tipo_adeudo', 50); // Ej. Pago, Documento, Comprobante
            $table->string('descripcion', 200);

            $table->foreign('matricula')->references('matricula')->on('estudiantes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adeudo_estudiantil');
    }
};
