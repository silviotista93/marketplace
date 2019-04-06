<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LocationUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $type_location
 * @property string $address
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereTypeLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LocationUser whereUpdatedAt($value)
 */
class LocationUser extends Model
{
    //
}
