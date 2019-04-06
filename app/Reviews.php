<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Reviews
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $rating
 * @property string $comment
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reviews whereUserId($value)
 */
class Reviews extends Model
{
    //
}
