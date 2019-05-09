<?php

namespace App\Http\Controllers\Backend\admin\store_managament;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index () {
        return view('backend.store_management.request');
    }
}
