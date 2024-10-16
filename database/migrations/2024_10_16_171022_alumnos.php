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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->char('noCtrl',length:8)->primary()->unique();
            $table->string('nombreAlumno',50);
            $table->string('apellidoPaterno',50);
            $table->string('apellidoMaterno',50);
            $table->char('sexo',length:1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
