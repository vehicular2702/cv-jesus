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
        Schema::create('cerificados', function (Blueprint $table) {
            $table->id('id_certificado');
            $table->string('archivo');
            $table->string('titulo_certificado');
            $table->string('tipo_certificado');
            $table->date('fecha_certificado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cerificados');
    }
};
