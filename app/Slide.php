<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Slide
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $subcategory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereUpdatedAt($value)
 */
class Slide extends Model
{
    //
}
