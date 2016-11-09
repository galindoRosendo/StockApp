<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStockInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TblStockIn', function (Blueprint $table) {
              $table->increments('StockInID');
              $table->dateTime('DateIn');
              $table->integer('QuantityIN');
              $table->double('UnitCos');
              $table->integer('SupplierID');
              $table->integer('ProductID');
              $table->integer('DeliveryNoteID');
              $table->foreign('SupplierID')->references('SupplierID')->on('TblSupplier');
              $table->foreign('ProductID')->references('ProductID')->on('TblProduct ');
              $table->foreign('DeliveryNoteID')->references('DeliveryNoteID')->on('TblDeliveryNote');
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
        Schema::dropIfExists('tbl_stock_ins');
    }
}
