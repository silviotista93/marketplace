<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    const ENVIADO   = "Enviado";
    const CANCELADO = "Cancelado";
    const ENTREGADO = "Entregado";
    const EN_ESPERA = "En espera";
}
