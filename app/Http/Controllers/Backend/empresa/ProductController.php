<?php
namespace App\Http\Controllers\Backend\empresa;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        return response()->json([
            msg => "sdssd"
        ], 201);
    }
}
