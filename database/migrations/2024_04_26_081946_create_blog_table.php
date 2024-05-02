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
        Schema::create('blog', function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('titulo_blog');
            $table->string('imagen_blog');
            $table->string('version_blog');
            $table->string('nivel_blog');
            $table->string('tiempo_blog');
            $table->string('video_blog');
            $table->string('titulo_video');
            $table->text('descripcion_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
