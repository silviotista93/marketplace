<?php
namespace App\Http\Controllers\Backend\empresa;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Description;
use Yajra\DataTables\Contracts\DataTable;
use App\Image;

class ProductController extends Controller
{
    public function index()
    {
        return view("backend.empresa.manage_products.list-products");
    }

    public function getProducts()
    {
        $products = Product::get();
        return datatables()->of($products)->toJson();
    }

    public function getInfoProduct(Request $request)
    {
        $product = Product::with([
            "stoks",
            "stoks.descriptions",
            "typeSubcategories",
            "typeSubcategories.types",
            "typeSubcategories.subCategories"
        ])->where("id", "=", $request->get("id"))->first();
        return response()->json($product, 200);
    }

    public function subirImagenPro(Request $request)
    {
        foreach($request->file('image') as $image){
            $path = $image->store('empresa');
        }
        if ($path) {
            return response()->json([
                "path" => "/storage/".$path,
                "msg" => "Imagen guardada"
            ], 200);
        } else {
            return response()->json('error', 400);
        }
    }

    public function store(Request $request)
    {
        $p = new Product($request->all());
        $p->status = Product::DISPONIBLE;
        $p->percentage = $request->get("percentage");
        $p->price_neto = $request->get("venta");
        $p->views = 0;
        $p->sell = 0;
        $p->weigth = 0;
        $p->slug = str_slug($p->name, "-");
        $p->stores_id = 1;
        $p->type_sub_id = $request->get('type_sub_id');
        $p->save();
        foreach ($request->get("imagenes") as $image) {
            $img = new Image();
            $img->image = $image;
            $img->product_id = $p->id;
            $img->save();
        }


        $productos = $request->get("productos");

        foreach ($productos as $pro) {
            $stock = new Stock();
            $stock->products_id = $p->id;
            $stock->quantity = $pro["cantidad"];
            $stock->save();

            $descriptions = $pro["descriptions"];

            $des = [];
            foreach ($descriptions as $description) {
                $d = new Description($description);
                $d->save();
                $des[] = $d->id;
            }

            $stock->descriptions()->attach($des);
        }

        return response()->json([
            "msg" => "Registro exitoso"
        ], 201);
    }
}
