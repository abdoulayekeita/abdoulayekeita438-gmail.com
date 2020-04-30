<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->string('address');
            $table->string('urlPageFacebook')->nullable();
            $table->string('urlPageInstagram')->nullable();
            $table->string('urlSite')->nullable();
            $table->unsignedBigInteger('sub_category_id');

            $table
                ->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categorys')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('shops');
    }
}
