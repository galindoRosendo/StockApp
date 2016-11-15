<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_repairs', function (Blueprint $table) {
          $table->increments('RepairId');
          $table->dateTime('OrderDate');
          $table->integer('IdTruck')->unsigned();
          $table->integer('StockOutID')->unsigned();
          $table->foreign('IdTruck')->references('IdTruck')->on('tbltrucks');
          $table->foreign('StockOutID')->references('StockOutID')->on('tbl_stock_outs');
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
        Schema::dropIfExists('tbl_repairs');
    }
}
