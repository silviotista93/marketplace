<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $category
 * @property string $slug
 * @property string $category_picture
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCategoryPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 */
class Category extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function types(){
        return $this->hasMany(\App\Type::class, 'category_id','id');
    }

    public function setCategoryAttribute($valor){
        $this->attributes['category'] = strtolower($valor);
    }
    
    public function getCategoryAttribute($valor){
        return ucwords($valor);
    }


}
