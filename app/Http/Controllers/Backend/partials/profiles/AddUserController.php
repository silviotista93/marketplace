<?php

namespace App\Http\Controllers\Backend\partials\profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Mail\NewUser;

class AddUserController extends Controller{
    
    public function __construct(){
        $this->middleware("permiso:".\join(",", [\App\Role::ROOT, \App\Role::EMPRESA]));
    }

    public function index(){
        $roles = Role::where("super_role_id", "=", \Auth::user()->roles()->get()[0]->id)->get();
        return view('backend.partials.profiles.add-users', compact("roles"));
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|max:255|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'last_name' => 'required|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'phone_1' => 'required|regex:/^\d+$/',
            'phone_2' => 'nullable|regex:/^[0-9]{0,}$/',
            'email' => 'unique:users,email|email',
            'roles' => 'required|array|min:1'
        ]);

        try {
            $user = new User($validatedData);
            $pass = str_random(12);
            $user->password = bcrypt($pass);
            $user->picture = "/backend/img/perfil.jpg";
            $user->slug = str_slug($user->name, "-");
            $user->status = User::ACTIVO;
            $user->save();
            foreach($validatedData["roles"] as $role){
                $user->roles()->attach($role);
            }
            
            \Mail::to($user)->send(new NewUser($user, $pass));
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "Error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Usuario creado correctamente'
        ],201);
    }
}
