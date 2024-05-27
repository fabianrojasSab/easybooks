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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('editorial');
            $table->string('edicion');
            //columna que registra el año de publicacion
            $table->string('anio');
            //columna que registra el isbn (International Standard Book Number)
            $table->string('isbn');
            $table->string('idioma');
            // $table->string('portada');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->string('estado');
            $table->foreignId('categoria_id')->constrained();
            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('editorial_id')->constrained();
            // $table->foreignId('idioma_id')->constrained();
            // $table->foreignId('ubicacion_id')->constrained();
            // $table->foreignId('estado_id')->constrained();
            // $table->foreignId('anio_id')->constrained();
            // $table->foreignId('edicion_id')->constrained();
            // $table->foreignId('isbn_id')->constrained();
            // $table->foreignId('portada_id')->constrained();
            // $table->foreignId('descripcion_id')->constrained();
            // $table->foreignId('titulo_id')->constrained();
            // $table->foreignId('autor_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
