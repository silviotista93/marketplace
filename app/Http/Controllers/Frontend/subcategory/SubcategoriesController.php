<?php

namespace App\Http\Controllers\Frontend\subcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\TypeSubcategory;

class SubcategoriesController extends Controller
{
    public function show(SubCategory $subcategory){   
    
            
        $subcategories = subCategory::where('id','=' ,$subcategory->id );
        $subcategory=$subcategory;
        $type = TypeSubcategory::with([
            'types.categories',
            'subCategories'
        ])->where('subcategory_id','=',$subcategory->id)->get();
        dd($type);

        return view('frontend.subcategory.subcategory',compact('subcategories','subcategory','type'));
    }
}
