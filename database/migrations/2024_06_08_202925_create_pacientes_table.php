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
        if(!Schema::hasTable('pacientes')) {
            Schema::create('pacientes', function (Blueprint $table) {
                $table->id();
                $table->text('nombre');
                $table->text('apellido');
                $table->date('fecha_nacimiento');
                $table->text('telefono');
                $table->text('email');
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
        Schema::dropIfExists('pacientes');
    }
};
