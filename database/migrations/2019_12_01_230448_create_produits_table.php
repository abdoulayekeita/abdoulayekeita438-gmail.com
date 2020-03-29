<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_produit')->nullable();
            $table->decimal('prix')->nullable();
            $table->text('description')->nullable();
            $table->boolean('publier')->default(false);
            $table->unsignedInteger('sousCategorie_id')->nullable();
            $table->unsignedInteger('boutique_id');
            $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('cascade');
            $table->foreign('sousCategorie_id')->references('id')->on('sousCategories')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
