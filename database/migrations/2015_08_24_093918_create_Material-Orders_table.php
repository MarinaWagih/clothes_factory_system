<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_Orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')
                  ->references('id')
                  ->on('materials');
            $table->integer('trader_id')->unsigned();
            $table->foreign('trader_id')
                ->references('id')
                ->on('traders');
            $table->integer('quantity')->unsigned();
            $table->float('total_price');
            $table->float('payed');
            $table->date('date');
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
        Schema::drop('Material_Orders');
    }
}
