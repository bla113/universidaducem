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
            $table->id();
            $table->string('tipo_identificacion', 25)->nullable();
            $table->string('identificacion', 25);
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('provincia', 25)->nullable();
            $table->string('canton', 25)->nullable();
            $table->string('distrito', 25)->nullable();
            $table->string('otras_senas', 150)->nullable();
            $table->string('procede', 25)->nullable();
            $table->string('turno', 25)->nullable();
            $table->string('fecha_nacimiento', 25)->nullable();
            $table->string('carnet', 25)->nullable();
            $table->string('telefono', 25)->nullable();
            $table->string('celular', 25)->nullable();
            $table->string('correo', 25)->nullable();
            $table->string('estado', 25)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
