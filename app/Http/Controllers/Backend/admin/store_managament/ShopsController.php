<?php

namespace App\Http\Controllers\Backend\admin\store_managament;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    public function index() {
        return view('backend.store_management.shops');
    }

    public function show (){
        return view('backend.store_management.show-stores');
    }
}
