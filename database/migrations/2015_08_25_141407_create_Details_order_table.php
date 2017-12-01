<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id')->unsigned();
            $table->foreign('detail_id')
                  ->references('id')
                  ->on('details');
            $table->integer('trader_id')->unsigned();
            $table->foreign('trader_id')
                  ->references('id')
                  ->on('traders');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products');
            $table->integer('quantity');
            $table->integer('delivered');
            $table->float('total_cost');
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
        Schema::drop('Detail_orders');
    }
}
