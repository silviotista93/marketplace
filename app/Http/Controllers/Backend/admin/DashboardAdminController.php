<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardAdminController extends Controller
{
    public function index(){
        $roles = \Auth::user()->roles()->get();
        $r = [];
        foreach ($roles as $role) {
            $r[] = $role->id;
        }
        $users = User::with("roles:name")->whereHas('roles', function ($query) use ($r) { })->where('id', auth()->user()->id)->get();
        return view('backend.admin.dashboard-admin',compact('users'));
    }
}
