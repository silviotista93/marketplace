<?php

namespace App\Http\Controllers\Frontend\category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\AddCategory;
use App\Http\Requests\UpdateCategory;
use App\Type;

class CategoriesController extends Controller
{
    
        public function show(Category $category){   
    
            
            $categories = Category::where('id','=' ,$category->id );
            $category=$category;
            return view('frontend.categories.categoria',compact('categories','category'));
        }




   /*  public function index()
    {
        
        return view('backend.admin.manage_categories.categories');
    }
 */
   /*  public function tabla_categorias()
    {

        $categories = Category::all();

        return datatables()->of($categories)->toJson();
    }


    public function saveCategory(AddCategory $request)
    {

        $validate = $request->validated();

        try {
            $category = new Category();

            $path = $request->file('imagen')->store('category');

            $category->category = $request->category;
            $category->icon = $request->icono;
            $category->category_picture = '/storage/' . $path;
            $category->slug = str_slug($request->category, '-');
            $category->save();
        } catch (\Throwable $th) {

            return response()->json([
                'msg' => $th->getMessage(),
                'title' => "error"
            ], 500);
        }
        return response()->json([
            'title' => 'Excelente',
            'msg' => 'Categoria registrada correctamente'
        ], 201);
    }

    public function updateCategory(UpdateCategory $request)
    {

        $validate = $request->validated();
        
        try {
            if($request->file('imagen')){

                $path = $request->file('imagen')->store('category');
                Category::where('id','=',$request->id_category)->update([
    
                    'category' => $request->get('category'),
                    'icon' => $request->get('icon'),
                    'category_picture' => '/storage/' . $path,
                    'slug' => str_slug($request->get('category'), '-')
    
                ]);
            }else{
                

                Category::where('id','=',$request->id_category)->update([
    
                    'category' => $request->get('category'),                    
                    'slug' => str_slug($request->get('category'), '-')
    
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
            'msg' => 'Categoria Actualizada correctamente'
        ], 201);
    } */


}
