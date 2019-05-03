<?php

namespace App\Http\Controllers\Frontend\empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    public function index(){

        return view('frontend.empresa.solicitud_empresa');
    }
}
