<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Description;

/**
 * App\Stock
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $quantity
 * @property int $types_id
 * @property int $products_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereTypesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Stock whereUpdatedAt($value)
 */
class Stock extends Model
{
    public function descriptions()
    {
        return $this->belongsToMany(Description::class, "description_stock", "stock_id", "description_id");
    }
}
