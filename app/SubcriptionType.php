<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubcriptionType
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $type
 * @property string $description
 * @property float $price
 * @property int $number_days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereNumberDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubcriptionType whereUpdatedAt($value)
 */
class SubcriptionType extends Model
{
    //
}
