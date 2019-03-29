<?php

namespace App\Http\Controllers\Backend\partials\profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddUserController extends Controller
{
    public function index(){
        return view('backend.partials.profiles.add-users');
    }
}
