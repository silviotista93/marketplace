<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class HomeController extends Controller
{
    public function index(){
        
              
        

        return view('frontend.home.home');
    }
}
