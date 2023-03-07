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
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->integer('diaH');
            $table->integer('horaH');
            $table->primary(['diaH', 'horaH']);
            $table->string('asignatura_id');
            $table->timestamps();
            $table->foreign('asignatura_id')
            ->references('codAs')->on('asignaturas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas');
    }
};
