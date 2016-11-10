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
              $table->double('UnitCost');
              $table->integer('Supplier_ID')->unsigned();
              $table->integer('ProductID')->unsigned();
              $table->integer('DeliveryNoteID')->unsigned();
              $table->foreign('Supplier_ID')->references('Supplier_ID')->on('TblSupplier');
              $table->foreign('ProductID')->references('ProductID')->on('TblProduct');
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
