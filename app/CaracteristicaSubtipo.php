<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaSubtipo extends Model
{
    public function getValoresAttribute($valor){
        return json_decode($valor);
    }
    public function getValidacionesAttribute($valor){
        return json_decode($valor);
    }
}
