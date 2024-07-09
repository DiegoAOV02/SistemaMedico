<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(): void
    {
        if(!Schema::hasTable('enfermeros')) {
            Schema::create('enfermeros', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->date('fecha_nacimiento');
                $table->string('telefono');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('role')->default('Enfermero');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('enfermeros');
    }
};
