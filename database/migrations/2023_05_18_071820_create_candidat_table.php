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
        Schema::create('candidat', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->boolean('niveau_one')->default(false);;
            $table->boolean('niveau_two')->default(false);;
            $table->boolean('niveau_tree')->default(false);;
            $table->boolean('niveau_four')->default(false);;
            $table->string('email');
            $table->string('telephone');
            $table->boolean('province_one')->default(false);;
            $table->boolean('province_two')->default(false);;
            $table->boolean('province_tree')->default(false);;
            $table->boolean('autorisation')->default(false);
            $table->string('fichier_one')->nullable();
            $table->string('fichier_two')->nullable();
            $table->string('fichier_tree')->nullable();
            $table->string('fichier_four')->nullable();
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
        Schema::dropIfExists('candidat');
    }
};