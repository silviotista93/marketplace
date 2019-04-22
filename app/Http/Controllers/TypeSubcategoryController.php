<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeSubcategoryController extends Controller
{
    public function types(){
        return $this->belongsToMany(\App\Type::class,'type_id');
    }

    public function subcategories(){
        return $this->belongToMany(\App\SubCategory::class,'subcategory_id');
    }
}
