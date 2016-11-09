<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TblQuotes', function (Blueprint $table) {
              $table->increments('QuoteID');
              $table->integer('QuoteNo');
              $table->double('QuoteValue');
              $table->integer('Supplier_id');
              $table->foreign('Supplier_id')->references('SupplierID')->on('TblSupplier');
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
        Schema::dropIfExists('tbl_quotes');
    }
}
