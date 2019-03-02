<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations. category_id int
  
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id');
            $table->integer('merchant_id');
            $table->integer('attribute_id');
            $table->string('name');
            $table->text('description');
            $table->text('specifation');
            $table->float('buy_price');
            $table->float('sell_price');
            $table->float('discunt_price');
            $table->string('image');
            $table->tinyInteger('status');
            $table->integer('quantity');
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
