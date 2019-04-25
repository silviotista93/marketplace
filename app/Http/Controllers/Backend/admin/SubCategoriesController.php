<?php

namespace App\Http\Controllers\Backend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSubCategory;
use App\Http\Requests\UpdateSubCategory;
use App\SubCategory;
use App\Type;
use App\TypeSubcategory;

class SubCategoriesController extends Controller
{
    public function index()
    {
        

        $tipo = Type::all();
        $typeSub=TypeSubcategory::where('subcategory_id', '=','id_subcategory')->get();
        

        return view('backend.admin.manage_categories.subcategories', compact(['tipo','typeSub']));
    }

    public function tabla_subcategorias()
    {

       /*  $subcategories = \App\Category::with('subcategories')->get(); */
        $subcategories = \App\SubCategory::all();
        /* $subcategories=TypeSubcategory::with([
            'types.categories',
            'subCategories'
            ])->get();
         */

        return datatables()->of($subcategories)->toJson();
    }


    public function saveSubCategory(AddSubCategory $request)
    {
        //dd($request);
        $validate = $request->validated();

        try {
            $subcategory = new SubCategory();

            $path = $request->file('imagen')->store('subcategory');

            $subcategory->sub_category = $request->subcategory;
            $subcategory->sub_category_picture = '/storage/' . $path;
            $subcategory->slug = str_slug($request->subcategory, '-');
            $subcategory->save();

            $type_sub = new TypeSubcategory();
            $type_sub->subcategory_id = $subcategory->id;
            $type_sub->type_id = $request->tipo;
            $type_sub->slug = $subcategory->id . $request->tipo;
            $type_sub->save();


            /* $subcategory->typeSub()->attach($request->tipo, array('slug'=>$subcategory->id.$request->tipo)); */
        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Sub categoria registrada correctamente'
        ], 201);
    }


    public function updateSubCategory(UpdateSubCategory $request)
    {

        $validate = $request->validated();

        try {

            if ($request->file('imagen')) {

                $path = $request->file('imagen')->store('subcategory');
                SubCategory::where('id', '=', $request->id_subcategory)->update([

                    'sub_category' => $request->get('subcategory'),
                    'sub_category_picture' => '/storage/' . $path,
                    'slug' => str_slug($request->get('subcategory'), '-'),


                ]);

                TypeSubcategory::where('subcategory_id','=',$request->id_subcategory)->update([

                    'subcategory_id' => $subcategory->id,
                    'type_id' => $request->tipo,
                    'slug' => $subcategory->id . $request->tipo
                ]);     
                

            } else {

                SubCategory::where('id', '=', $request->id_subcategory)->update([

                    'sub_category' => $request->get('subcategory'),
                    'slug' => str_slug($request->get('subcategory'), '-'),


                ]);


                TypeSubcategory::where('subcategory_id','=',$request->id_subcategory)->update([

                    'subcategory_id' => $subcategory->id,
                    'type_id' => $request->tipo,
                    'slug' => $subcategory->id . $request->tipo
                ]); 
            }
        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Sub Categoria Actualizada correctamente'
        ], 201);
    }
}
