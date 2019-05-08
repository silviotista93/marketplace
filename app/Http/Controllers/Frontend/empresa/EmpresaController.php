<?php

namespace App\Http\Controllers\Frontend\empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\AddStore;

class EmpresaController extends Controller
{
    public function index(){

        return view('frontend.empresa.solicitud_empresa');
    }

    public  function saveStore(AddStore $request){
        $validate = $request->validated();
       

        try {
            $user = new User();
            $user->name = $request->name;
            $user->last_name = $request->apellido;
            $user->email = $request->email;
            $user->phone_1 = $request->phone;
            $user->phone_2 = $request->phone2;
            $user->birthday = $request->fechaNAc;
            $user->gender = $request->genero;
            $user->password = "null";
            $user->picture = "/backend/img/perfil.jpg";
            $user->slug = str_slug($user->name, "-");
            $user->status = User::INACTIVO;
            $user->save();
            /* return $request; */
           
            
           /*  \Mail::to($user)->send(new NewUser($user, $pass)); */
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "Error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Registrado correctamente, en pocos dias recibira un email con la aprovacion de su tienda '
        ],201);
    }
}
