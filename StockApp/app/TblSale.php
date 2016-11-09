<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblSale extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'IdCustomers','StockOutID','OrderDate','TipoPersona','Moneda','Descuento','Iva','Credito'
  ];
}
