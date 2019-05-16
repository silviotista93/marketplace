<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubCategory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $sub_category
 * @property string $slug
 * @property string $sub_category_picture
 * @property int $categories_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereSubCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereSubCategoryPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubCategory whereUpdatedAt($value)
 */
class SubCategory extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function typeSub(){
        return $this->belongsToMany(\App\TypeSubcategory::class,'type_subcategories','type_id','subcategory_id');
    }
    


    public function setSubCategoryAttribute($valor){
        $this->attributes['sub_category'] = ucfirst($valor);
    }
    
    public function getSubCategoryAttribute($valor){
        return ucfirst($valor);
    }
}
