<?php

namespace App\Http\Controllers\Backend\partials\profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EditProfileController extends Controller
{

    public function index_user()
    {

        $roles = \Auth::user()->roles()->get();
        $r = [];
        foreach ($roles as $role) {
            $r[] = $role->id;
        }
        $users = User::with("roles:name")->whereHas('roles', function ($query) use ($r) { })->where('id', auth()->user()->id)->get();
        return view('backend.partials.profiles.edit-profile', compact("users"));
    }

    public function update_password(Request $request)
    {

        try {

            if (($request->filled('password')) && ($request->file('imagen'))) {

                $this->validate($request, [

                    'password' => 'confirmed|min:5',
                    'imagen' => 'mimes:jpeg,bmp,png',

                ]);
                $path = $request->file('imagen')->store('user');
                $password = $request->get('password');
                $newpassword = bcrypt($password);

                $user = User::where('id', auth()->user()->id)->update([
                    'password' => $newpassword,
                    'picture' => '/storage/' . $path,
                ]);

                $response = response()->json([
                    'title' => 'Exelente',
                    'msg' => 'Datos actualizados'
                ], 201);

                // $msg = 'Usuario Actualizado';
            } else if ($request->filled('password')) {

                $this->validate($request, [

                    'password' => 'confirmed|min:5'


                ]);

                $password = $request->get('password');
                $newpassword = bcrypt($password);
                $user = User::where('id', auth()->user()->id)->update([
                    'password' => $newpassword,

                ]);
                $response = response()->json([
                    'title' => 'Exelente',
                    'msg' => 'Password actualizado'
                ], 201);

                // $msg = 'Password Actualizado';
            } else if ($request->file('imagen')) {

                $this->validate($request, [

                    'imagen' => 'mimes:jpeg,bmp,png',

                ]);
                $path = $request->file('imagen')->store('user');

                $user = User::where('id', auth()->user()->id)->update([

                    'picture' => '/storage/' . $path,
                ]);

                $response = response()->json([
                    'title' => 'Exelente',
                    'msg' => 'Imagen Actualizada'
                ], 201);
                // $msg = 'Imagen Actualizada';
            } else {
               $response = response()->json([
                    'title' => 'Oh¡',
                    'msg' => 'No se realizo ningun cambio'
                ], 201);
                // $msg = 'No se realizo ningun cambio';
            }
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return $response;
    }
}
