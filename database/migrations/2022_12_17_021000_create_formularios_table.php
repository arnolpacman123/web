<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedInteger('nota_inicial');
            $table->unsignedInteger('nota_docente');
            $table->unsignedInteger('nota_final');
            $table->foreignId('postulante_id')->constrained('postulantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
