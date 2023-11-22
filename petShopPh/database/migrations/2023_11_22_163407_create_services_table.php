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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('visitType');
            $table->string('petType');            
            $table->text('breed')->nullable();
            $table->string('petSize');           
            $table->string('petAge');           
            $table->string('walks');           
            $table->string('petTrain');           
            $table->string('petProgram');           
            $table->string('petGroom');           
            $table->text('anythingElse')->nullable();            
            $table->int('date');            
            $table->int('time'); 
            $table->int('daysreq');                        
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
