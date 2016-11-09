<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblStockOut extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'StockInID','DateOut','QuantityOut','UnitPrice'
  ];
}
