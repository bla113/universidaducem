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
        Schema::create('planes_carreras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',20);
            $table->string('nombre',100);
            $table->string('periodos',10);
            $table->string('creditos',10);
            $table->string('estado',10);
            $table->unsignedBigInteger('carreras_id');
            $table->foreign('carreras_id')->references('id')->on('carreras')
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
        Schema::dropIfExists('plan_carrera');
    }
};
