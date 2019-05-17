<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_profesor');
    }
}
