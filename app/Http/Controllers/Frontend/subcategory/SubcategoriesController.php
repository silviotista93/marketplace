<?php

namespace App\Http\Controllers\Frontend\subcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;

class SubcategoriesController extends Controller
{
    public function show(SubCategory $subcategory){   
    
            
        $subcategories = subCategory::where('id','=' ,$subcategory->id );
        $subcategory=$subcategory;
        return view('frontend.subcategory.subcategory',compact('subcategories','subcategory'));
    }
}
