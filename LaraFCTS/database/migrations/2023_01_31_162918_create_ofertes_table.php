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
        Schema::create('ofertes', function (Blueprint $table) {
            $table->increments('idOfe');
            /*$table->string('descripcio', 50);
            $table->integer('vacants', 2);
            $table->string('curs',10);
            $table->string('nomContatcte',20);
            $table->string('cognomsContacte',40);
            $table->string('correuContacte',40);
            $table->foreignId('idEmpresa')->nullable()->constrained('empreses')->references('idEmpresa');
            $table->foreignId('idCicle')->nullable()->constrained('estudis')->references('idEstudi');*/
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
};
