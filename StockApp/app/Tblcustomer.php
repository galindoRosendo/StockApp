<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblcustomer extends Model
{

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'Name', 'LastName', 'Domicilio','NumExt','Colonia','Ciudad','Pais','Estado',
          'Municipio','Cp','Telefono','Rfc','MetodoPago','Banco','email'
      ];
}
