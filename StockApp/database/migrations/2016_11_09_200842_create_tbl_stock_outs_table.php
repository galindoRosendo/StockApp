<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStockOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TblStockOut', function (Blueprint $table) {
            $table->increments('StockOutID');
            $table->dateTime('DateOut');
            $table->integer('QuantityOut');
            $table->double('UnitPrice');
            $table->integer('StockInID')->unsigned();
            $table->foreign('StockInID')->references('StockInID')->on('TblStockIn');
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
        Schema::dropIfExists('tbl_stock_outs');
    }
}
