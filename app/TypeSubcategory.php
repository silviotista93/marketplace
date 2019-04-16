<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeSubcategory extends Model
{
    public function types()
    {

        return $this->belongsTo(\App\Type::class, 'type_id', 'id');
    }


    public function subCategories()
    {

        return $this->belongsTo(\App\subCategory::class, 'subcategory_id', 'id');
    }
}
