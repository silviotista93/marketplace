<?php
namespace App\Http\Controllers\Backend\empresa;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Description;

class ProductController extends Controller
{
    public function store(Request $request){
        $p = new Product($request->all());
        $p->status = Product::DISPONIBLE;
        $p->price_neto = $p->price;
        $p->views = 0;
        $p->sell = 0;
        $p->weigth = 0;
        $p->slug = str_slug($p->name, "-");
        $p->save();

        $productos = $request->get("productos");

        foreach($productos as $pro){
            $stock = new Stock();
            $stock->types_id = $request->get("type");
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
