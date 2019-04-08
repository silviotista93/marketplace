<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoriesController extends Controller
{
    public function index(){
        return view('backend.admin.manage_categories.subcategories');
    }

    public function tabla_subcategorias(){

        //$subcategories = \App\Category::with('subcategories')->get();
        $subcategories = \App\SubCategory::all();

        return datatables()->of($subcategories)->toJson();

    }


    public function saveCategory( Request $request ){

        $validate = $request->validate([
            'category'=> 'required|unique:categories,category|max:100|regex:/^[ A-Za-zñÑáéíóúÁÉÍÓÚ]+$/',
            'imagen'=> 'required|mimes:jpeg,bmp,png'
        ]);

        try{
            $category = new Category();
    
            $path = $request->file('imagen')->store('category');
    
            $category->category = $request->category;
            $category->category_picture = '/storage/'.$path;
            $category->slug =str_slug($request->category, '-');
            $category->save();

        }catch( \Throwable $th){

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ],500);

        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Categoria registrada correctamente'
        ],201);


        
    }
}
