<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->string('estado');
            $table->string('responsable');
            $table->decimal('monto', 15, 2);
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            // Definir relación con usuarios
            $table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
