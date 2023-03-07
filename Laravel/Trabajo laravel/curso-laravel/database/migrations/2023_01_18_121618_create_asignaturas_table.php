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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->string('codAs');
            $table->primary('codAs');
            $table->string('nombreAs');
            $table->string('nombreCortoAs');
            $table->string('profesorAs');
            $table->string('colorAs');
            $table->bigInteger("id_user", false,true);
            $table->timestamps();
            $table->foreign('id_user')
            ->references('id')->on('users')
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
        Schema::dropIfExists('asignaturas');
    }
};
