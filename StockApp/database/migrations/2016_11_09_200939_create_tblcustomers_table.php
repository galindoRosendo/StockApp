<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tblcustomers', function (Blueprint $table) {
            $table->increments('IdCustomers');
            $table->string('Nombre',50);
            $table->string('Apellido',30);
            $table->string('Domicilio',50);
            $table->string('NumExt',10);
            $table->string('Colonia',50);
            $table->string('Ciudad',30);
            $table->string('Pais',20);
            $table->string('Estado',20);
            $table->string('Municipio',20);
            $table->string('Cp',10);
            $table->string('Telefono',20);
            $table->string('Rfc',15);
            $table->string('MetodoPago',20);
            $table->string('Banco',20);
            $table->string('Email',30);
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
        Schema::dropIfExists('tblcustomers');
    }
}
