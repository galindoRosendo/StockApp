<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('TblSales', function (Blueprint $table) {
          $table->increments('SaleID');
          $table->dateTime('OrderDate');
          $table->string('TipoPersona',20);
          $table->string('Moneda',15);
          $table->double('Descuento');
          $table->double('Iva');
          $table->boolean('Credito');
          $table->integer('IdCustomers')->unsigned();
          $table->integer('StockOutID')->unsigned();
          $table->integer('idPago')->unsigned();
          $table->foreign('StockOutID')->references('StockOutID')->on('TblStockOut');
          $table->foreign('IdCustomers')->references('IdCustomers')->on('Tblcustomers');
          $table->foreign('idPago')->references('idPago')->on('TblPago');
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
        Schema::dropIfExists('tbl_sales');
    }
}
