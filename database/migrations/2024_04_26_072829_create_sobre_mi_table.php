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
        Schema::create('sobre_mi', function (Blueprint $table) {
            $table->id('id_sobre_mi');
            $table->string('titulo_sobre_mi');
            $table->text('descripcion_sobre_mi');
            $table->text('github');
            $table->text('facebook');
            $table->text('whatsapp');
            $table->text('instagram');
            $table->text('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobre_mi');
    }
};
