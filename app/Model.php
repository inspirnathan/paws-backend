<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{

  //whitelisting
  //protected $fillable = [];

  //blacklisting
  protected $guarded = [];

}
