<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPurchaseOrder extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'SupplierID','PONumber','PODate','POValue'
  ];
}
