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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',75);
            $table->string('apPaterno',75);
            $table->string('apMaterno',75);
            $table->string('dni_students',8);
            $table->string('nrCelular',15);
            $table->string('direccion',250);
            $table->integer('edad');
            $table->enum('sexo',['Masculino','Femenino']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
