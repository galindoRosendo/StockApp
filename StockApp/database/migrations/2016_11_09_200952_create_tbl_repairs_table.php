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
      Schema::create('TblRepair', function (Blueprint $table) {
          $table->increments('RepairId');
          $table->dateTime('OrderDate ');
          $table->integer('IdTruck');
          $table->integer('StockOutID');
          $table->foreign('IdTruck')->references('IdTruck')->on('Tbltrucks');
          $table->foreign('StockOutID')->references('StockOutID')->on('TblStockOut');
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
