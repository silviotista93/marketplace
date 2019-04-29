<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $slug
 * @property string $status
 * @property string $name
 * @property string $short_description
 * @property string $description
 * @property float $price
 * @property float $price_neto
 * @property int $views
 * @property int $sell
 * @property float $weigth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePriceNeto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereWeigth($value)
 */
class Product extends Model
{
    const DISPONIBLE = 1;
    const NO_DISPONIBLE = 0;

    protected $fillable = [
        "name",
        "short_description",
        "description",
        "price"
    ];

}
