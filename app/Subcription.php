<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Subcription
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $subcription_types_id
 * @property int $stores_id
 * @property string $start_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereStoresId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereSubcriptionTypesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subcription whereUpdatedAt($value)
 */
class Subcription extends Model
{
    const INACTIVA = 0;
    const ACTIVA = 1;
    const SUSPENDIDA = 2;
}
