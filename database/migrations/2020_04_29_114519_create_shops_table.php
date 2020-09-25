<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->boolean('is_valide')->default(false);
            $table->boolean('denied')->default(false);
            $table->string('address');
            $table->string('urlPageFacebook')->nullable();
            $table->string('urlPageInstagram')->nullable();
            $table->string('urlSite')->nullable();
            $table->unsignedBigInteger('category_id');

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categorys')
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
