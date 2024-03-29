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
        Schema::create('cornellnotes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 300);
            $table->string('ideas', 300);
            $table->string('notas', 300);
            $table->string('resumen', 300);
            $table->foreignId('user_id')
                ->constrained() //indica que hay llave foranea
                ->onUpdate('cascade') //si actualizo hago cascada que significa que cuando hago cambio en el padre se refleje en este
                ->onDelete('cascade');
            $table->foreignId('topic_id')
                ->constrained() //indica que hay llave foranea
                ->onUpdate('cascade') //si actualizo hago cascada que significa que cuando hago cambio en el padre se refleje en este
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cornellnotes');
    }
};
