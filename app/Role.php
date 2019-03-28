<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  const ADMIN = 1;
  const VENDEDOR= 2;
  const BODEGA = 3;
}
