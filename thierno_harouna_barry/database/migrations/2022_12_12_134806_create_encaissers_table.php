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
        Schema::create('encaissers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caisse_id')->contrained();
            $table->foreignId('etudiant_id')->contrained();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->time('heure_encaisse');
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
        Schema::dropIfExists('encaissers');
    }
};
