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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propietario_id');
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
            $table->string('marca');
            $table->string('modelo');
            $table->unsignedSmallInteger('año');
            $table->string('matricula');
            $table->enum('tipo', ['coche', 'moto', 'camión']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
