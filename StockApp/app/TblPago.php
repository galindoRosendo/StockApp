<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPago extends Model
{

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'idDescripcion'
      ];
}
