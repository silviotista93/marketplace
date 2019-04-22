<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\TypeSubcategory;
use App\SubCategory;
use App\Type;



class HomeController extends Controller
{
    public function index(){
        
    $type=TypeSubcategory::with([
        'types.categories',
        'subCategories'
        ])->get();

   /*  $sub=Type::with(['typeSub.subcategories'])->get(); */
    
       /* dd(json_decode(json_encode($sub))); */
         $categories=\App\Category::orderBy('category','asc')->get();
        // dd(json_decode(json_encode($categories)));
        

        return view('frontend.home.home', compact(['categories','type']));
    }
}
