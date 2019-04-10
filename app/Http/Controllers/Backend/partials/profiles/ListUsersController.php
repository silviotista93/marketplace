<?php

namespace App\Http\Controllers\Backend\partials\profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class ListUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware("permiso:" . \join(",", [\App\Role::ROOT, \App\Role::EMPRESA]));
    }

    public function index()
    {
        return view('backend.partials.profiles.list-users');
    }

    public function getUsers(Request $request)
    {
        $roles = Auth::user()->roles()->get();
        $r = [];
        foreach ($roles as $role) {
            $r[] = $role->id;
        }
        $users = User::with("roles:name")->whereHas('roles', function ($query) use ($r) {
            $query->where('super_role_id', '=', 1);
        })->get();
        return datatables()->of($users)->toJson();
    }
}
