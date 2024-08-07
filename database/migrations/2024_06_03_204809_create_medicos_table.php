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
        if(!Schema::hasTable('medicos')) {
            Schema::create('medicos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('profesion');
                $table->timestamps();
    
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('medicos');
    }
};
