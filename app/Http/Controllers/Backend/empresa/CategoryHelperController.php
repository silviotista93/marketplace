<?php
namespace App\Http\Controllers\Backend\empresa;

use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\TypeSubcategory;
use App\Type;
use Illuminate\Support\Facades\DB;

class CategoryHelperController extends Controller
{
    /**
     * Obtiene la lista de categorias disponibles
     *
     * @return Category[] $categories
     */
    public function categories()
    {
        $categories = Category::all();
        return response()->json(
            $categories,
            200
        );
    }

    /**
     * Obtiene la lista de tipos disponibles de una categoria
     * @param int $category id de la categoria
     * @return Type[] $types
     */
    public function typesForCategories($category)
    {
        $types = Type::where("category_id", "=", $category)->get();
        return $types;
    }

    /**
     * Obtiene la lista de subcategorias disponibles de un tipo
     * @param int $type id del tipo
     * @return SubCategory[] $subcategories
     */
    public function subcategoriesFortype($type)
    {
        $subcategories = DB::table( 'type_subcategories as t' )
            ->select(['t.id as type_sub_id', 's.*'])
            ->join( 'sub_categories as s', 's.id', '=', 't.subcategory_id')
            ->where([ 't.type_id' => $type])
            ->get();
        return $subcategories;
    }
}
