<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesBoutiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagesBoutiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->unsignedInteger('boutique_id');
            $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('cascade');
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
        Schema::dropIfExists('imagesBoutiques');
    }
}
