<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->boolean('isPriceNegotiate')->default(false);
            $table->boolean('isPossibleToChange')->default(false);
            $table->longText('description');
            $table->unsignedBigInteger('sub_category_id');

            $table
                ->foreign('sub_category_id')
                ->references('id')
                ->on('sub_categorys')
                ->onDelete('cascade');

            $table->unsignedBigInteger('shop_id')->nullable();

            $table
                ->foreign('shop_id')
                ->references('id')
                ->on('shops')
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
        Schema::dropIfExists('products');
    }
}
