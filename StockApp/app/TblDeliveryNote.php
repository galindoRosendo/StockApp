<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblDeliveryNote extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'DeliveryNoteNo','DeliveryNoteDate'
  ];
}
