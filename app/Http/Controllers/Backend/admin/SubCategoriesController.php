<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSubCategory;
use App\SubCategory;

class SubCategoriesController extends Controller
{
    public function index(){

        $categories = \App\Category::all(); 

        return view('backend.admin.manage_categories.subcategories',compact('categories') );
    }

    public function tabla_subcategorias(){

        //$subcategories = \App\Category::with('subcategories')->get();
        $subcategories = \App\SubCategory::all();

        return datatables()->of($subcategories)->toJson();

    }


    public function saveSubCategory(AddSubCategory $request ){
        //dd($request);
        $validate = $request->validated();

        try{
            $subcategory = new SubCategory();
    
            $path = $request->file('imagen')->store('subcategory');
    
            $subcategory->sub_category = $request->subcategory;
            $subcategory->sub_category_picture = '/storage/'.$path;
            $subcategory->slug =str_slug($request->subcategory, '-');
            $subcategory->categories_id =$request->categoria;
            $subcategory->save();

        }catch( \Throwable $th){

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ],500);

        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Sub categoria registrada correctamente'
        ],201);


        
    }


    public function updateSubCategory(AddSubCategory $request)
    {

        $validate = $request->validated();

        try {
            $path = $request->file('imagen')->store('subcategory');
            SubCategory::where('id','=',$request->id_subcategory)->update([

                'sub_category' => $request->get('subcategory'),
                'sub_category_picture' => '/storage/' . $path,
                'slug' => str_slug($request->get('subcategory'), '-'),
                'categories_id' => $request->get('categoria'),

            ]);

            

        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Categoria Actualizada correctamente'
        ], 201);
    }
}
