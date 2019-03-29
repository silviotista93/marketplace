<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  const ROOT = 1;
  const SUPER_ADMIN = 2;
  CONST MARKETING = 3;
  const ADMIN = 4;
  const VENDEDOR = 5;
  const BODEGA = 6;

  public function users(){
    return $this->belongsToMany(\App\User::class);
  }


}
