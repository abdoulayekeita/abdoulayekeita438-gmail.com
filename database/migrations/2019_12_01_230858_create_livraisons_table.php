<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_livraison');
            $table->text('description_livraison')->nullable();
            $table->unsignedInteger('commande_id');
            $table->unsignedInteger('boutique_id');
            $table->unsignedInteger('modelivraison_id');
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('cascade');
            $table->foreign('modelivraison_id')->references('id')->on('modeLivraisons')->onDelete('cascade');
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
        Schema::dropIfExists('livraisons');
    }
}
