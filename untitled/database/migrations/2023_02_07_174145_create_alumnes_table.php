<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnes', function (Blueprint $table) {
            $table->bigIncrements('idAlumne');
            $table->string('nomAlumne', 30);
            $table->string('CognomAlumne', 50);
            $table->string('DNI', 10);
            $table->integer('Curs');
            $table->string('Telefon',12);
            $table->string('Correu',40);
            $table->boolean('IsPractiques')->nullable();
            $table->integer('idTutor')->nullable()->constrained('users')->references('id');
            $table->integer('Cicle')->nullable()->constrained('estudis')->references('idEstudi');
            $table->string('CV', 100)->nullable();
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
        Schema::dropIfExists('alumnes.blade.php');
    }
}
