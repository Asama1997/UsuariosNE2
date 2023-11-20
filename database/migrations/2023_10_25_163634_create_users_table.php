<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('empleado');
            $table->string('supervisor');
            $table->String('telefono');
            $table->string('email');
            $table->String('vehiculo')->nullable();
            $table->string('foto');
            $table->string('archivo');
            $table->string('justificante')->nullable();
            $table->string('reporte')->nullable();
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
