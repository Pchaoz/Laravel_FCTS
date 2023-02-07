<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreses', function (Blueprint $table) {
            $table->bigIncrements('idEmpresa');
            $table->string('nom', 15);
            $table->string('adreça', 200);
            $table->string('telefon', 15);
            $table->string('correu',60);
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
        Schema::dropIfExists('empreses');
    }
}
