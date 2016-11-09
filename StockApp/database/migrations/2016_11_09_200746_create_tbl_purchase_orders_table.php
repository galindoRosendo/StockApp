<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TblPurchaseOrder', function (Blueprint $table) {
                $table->increments('POID');
                $table->string('PONumber');
                $table->dateTime('PODate')
                $table->double('POValue');
                $table->integer('SupplierID');
                $table->foreign('SupplierID')->references('SupplierID')->on('TblSupplier');
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
        Schema::dropIfExists('tbl_purchase_orders');
    }
}
