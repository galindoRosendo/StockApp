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
      Schema::create('tbl_quotes', function (Blueprint $table) {
              $table->increments('QuoteID');
              $table->integer('QuoteNo');
              $table->double('QuoteValue');
              $table->integer('Supplier_id')->unsigned();
              $table->foreign('Supplier_id')->references('Supplier_id')->on('tbl_suppliers');
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
