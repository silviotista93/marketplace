<?php

namespace App\Http\Controllers\Frontend\empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\AddStore;
use App\Mail\NewStoreRequest;
use App\Store;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index(){

        return view('frontend.empresa.solicitud_empresa');
    }

    public  function saveStore(AddStore $request){
        $validate = $request->validated();
       

        try {
            DB::beginTransaction();

                $user = new User();
                $user->name = $request->name;
                $user->last_name = $request->apellido;
                $user->email = $request->email;
                $user->phone_1 = $request->phone;
                $user->phone_2 = $request->phone2;           
                $user->password = "null";
                $user->picture = "/backend/img/perfil.jpg";
                $user->slug = str_slug($user->name, "-");
                $user->status = User::INACTIVO;
                $user->save();
                $pathR = $request->file('imagenRut')->store('rut');
                $pathS = $request->file('imagenE')->store('statement');
                $pathD = $request->file('imagenDni')->store('dni');
                
                $store = new Store();
    
                $store->store_name=$request->nombreT;
                $store->rut=$request->imagen;
                $store->bank_statement=$request->nombreT;
                $store->rut = '/storage/' . $pathR;
                $store->bank_statement = '/storage/' . $pathS;
                $store->dni_picture = '/storage/' . $pathD;            
                $store->status= "0";
                $store->users_id= $user->id;            
                $store->save();
            
           
            
            \Mail::to($request->email)->send(new NewStoreRequest($request->name, $request->apellido,$request->nombreT));

        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "Error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Registrado correctamente, en pocos dias recibira un email con la aprovacion de su tienda '
        ],201);
        return $request;
    }
}
