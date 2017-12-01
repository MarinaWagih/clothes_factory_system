<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_order_id')->unsigned();
            $table->foreign('product_order_id')
                ->references('id')
                ->on('product_orders');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->integer('quantity');
            $table->float('cost');
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
        Schema::drop('product_order_details');
    }
}
