<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\TypeSubcategory;

class HomeController extends Controller
{
    public function index(){
        
        // $categories=TypeSubcategory::with(['types.categories','subCategories'])->get();
       
        $categories=\App\Category::all();
        // dd(json_decode(json_encode($categories)));
        

        return view('frontend.home.home', compact('categories'));
    }
}
