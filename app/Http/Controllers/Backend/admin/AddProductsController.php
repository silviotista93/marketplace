<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddProductsController extends Controller
{
    public function index(){
        return view('backend.admin.manage_products.add_products');
    }
}
