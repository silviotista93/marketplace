<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Shopping
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $status
 * @property string $payment_method
 * @property float $total_price
 * @property int $users_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Shopping whereUsersId($value)
 */
class Shopping extends Model
{
    const ENVIADO   = "Enviado";
    const CANCELADO = "Cancelado";
    const ENTREGADO = "Entregado";
    const EN_ESPERA = "En espera";
}
