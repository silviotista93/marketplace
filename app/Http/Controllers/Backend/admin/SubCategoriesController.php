<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoriesController extends Controller
{
    public function index(){
        return view('backend.admin.manage_categories.subcategories');
    }
}
