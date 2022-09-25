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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('type_client');
            $table->string('nom_structure');
            $table->string('adresse');
            $table->string('ville');
            $table->string('type_service');
            $table->DATE('date');
            $table->TIME('heure');
            $table->text('details',1025);
            $table->timestamps();
            // ici les deux ligne marchent de paire et c'était l'ancienne method mais je vais utiliser la nouvelle method avec foreignId
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
