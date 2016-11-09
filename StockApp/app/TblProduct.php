<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblProduct extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'ProductName','ProductDescription','UnitOfMeasure'
  ];
}
