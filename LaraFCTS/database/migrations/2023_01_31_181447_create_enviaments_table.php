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
        Schema::create('enviaments', function (Blueprint $table) {
            $table->bigIncrements("idEnviaments");
            $table->string("estat",30);
            $table->foreignId('idAlumne')->nullable()->constrained('alumnes')->references('idAlumne');
            $table->foreignId('idOferta')->nullable()->constrained('ofertes')->references('idOferta');
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
        Schema::table('enviaments', function (Blueprint $table) {
            $table->dropForeign(['enviaments_idAlumne_foreign']);
            $table->dropColumn('idAlumne');
            $table->dropForeign(['enviaments_idOferta_foreign']);
            $table->dropColumn('idOferta');
        });
        Schema::dropIfExists('enviaments');
    }
};