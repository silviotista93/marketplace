<?php

namespace App\Http\Controllers\Backend\admin\store_managament;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store;

class RequestController extends Controller
{
    public function index () {
        $stores=Store::with('users')->get();
        /* dd($stores); */
        return view('backend.store_management.request');
    }

    public function dataTableRequest() {
        $stores=Store::with('users')->get();
        /* dd($stores); */
        return datatables()->of($stores)->toJson();
    }


    public function requestDetail($id){

        $stores=Store::with('users')->where('id','=',$id)->get();
        /* dd($stores); */
        return view('backend.store_management.show-solicitud', compact('stores'));
    }
}
