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
      Schema::create('tbl_purchase_orders', function (Blueprint $table) {
                $table->increments('POID');
                $table->string('PONumber');
                $table->dateTime('PODate');
                $table->double('POValue');
                $table->integer('Supplier_ID')->unsigned();
                $table->foreign('Supplier_ID')->references('Supplier_ID')->on('tbl_suppliers');
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
