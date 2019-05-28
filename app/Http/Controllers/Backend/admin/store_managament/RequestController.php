<?php

namespace App\Http\Controllers\Backend\admin\store_managament;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store;
use App\Mail\agreeRequest;
use App\User;
use App\Mail\RejectedRequest;

class RequestController extends Controller
{
    public function index()
    {
        $stores = Store::with('users')->get();
        /* dd($stores); */
        return view('backend.store_management.request');
    }

    public function dataTableRequest()
    {
        $stores = Store::with('users')->get();
        /* dd($stores); */
        return datatables()->of($stores)->toJson();
    }


    public function requestDetail($id)
    {

        $stores = Store::with('users')->where('id', '=', $id)->get();
        /* dd($stores); */
        return view('backend.store_management.show-solicitud', compact('stores'));
    }

    public function requestAccepted(Request $request)
    {
        try {
            $store = Store::with('users')->where('id', '=', $request->idRequest)->get();
            $pass = str_random(8);
            $password = bcrypt($pass);
            Store::where('id', '=', $request->idRequest)->update([
                'status' => 1
            ]);
            User::where('id', '=', $store[0]->users->id )->update([
                'password' => $password,
                'status' => 'Activo'
            ]);
            $user=User::find($store[0]->users->id);
            $user->roles()->attach(7);

            \Mail::to($store[0]->users->email)->send(new agreeRequest($store[0]->users->email, $store[0]->users->name, $store[0]->users->last_name, $store[0]->store_name, $pass, $request->observacion));
        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Respuesta enviada correctamente'
        ], 201);
    }

    public function requestRejected(Request $request){
        try {
            $store = Store::with('users')->where('id', '=', $request->idRequest)->get();
            /* $pass = str_random(8);
            $password = bcrypt($pass); */
            /* Store::where('id', '=', $request->idRequest)->update([
                'status' => 1
            ]); */
            /* User::where('id', '=', $store[0]->users->id )->update([
                'password' => $password,
                'status' => 'Activo'
            ]); */
            /* $user=User::find($store[0]->users->id);
            $user->roles()->attach(7); */

            \Mail::to($store[0]->users->email)->send(new RejectedRequest($store[0]->users->email, $store[0]->users->name, $store[0]->users->last_name, $store[0]->store_name, $request->observacion));
        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Respuesta enviada correctamente'
        ], 201);
    }
}
