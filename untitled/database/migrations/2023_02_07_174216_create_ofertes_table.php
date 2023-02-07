<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertes', function (Blueprint $table) {
            $table->bigIncrements("idOferta");
            $table->string('descripcio', 50);
            $table->integer('vacants');
            $table->string('curs',10);
            $table->string('nomContacte',20);
            $table->string('cognomsContacte',40);
            $table->string('correuContacte',40);
            $table->foreignId('idEmpresa')->nullable()->constrained('empreses')->references('idEmpresa');
            $table->foreignId('idCicle')->nullable()->constrained('estudis')->references('idEstudi');
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
        Schema::dropIfExists('ofertes');
    }
}
