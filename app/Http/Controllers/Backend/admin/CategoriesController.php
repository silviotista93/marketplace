<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
        return view('backend.admin.manage_categories.categories');
    }

    public function tabla_categorias(){

        $categories = Category::all();

        return datatables()->of($categories)->toJson();

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
