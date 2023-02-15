<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('enviaments', function (Blueprint $table) {
            $table->bigIncrements("idEnviaments");
            $table->string("estat",30);
            $table->foreignId('idAlumne')->nullable()->constrained('alumnes')->references('idAlumne');
            $table->foreignId('idOferta')->nullable()->constrained('ofertes')->references('idOferta');
            $table->string("observacions", 150)->nullable();
            $table->foreignId('creatPer')->default(1)->constrained('users')->references('idUser');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enviaments', function (Blueprint $table) {
            $table->dropForeign(['enviaments_idAlumne_foreign']);
            $table->dropColumn('idAlumne');
            $table->dropForeign(['ofertes_idOferta_foreign']);
            $table->dropColumn('idOferta');
        });
        Schema::dropIfExists('enviaments');
    }
}
