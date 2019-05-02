<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\TypeSubcategory;
use App\SubCategory;
use App\Type;



class HomeController extends Controller
{
    public function index()
    {

        $type = TypeSubcategory::with([
            'types.categories',
            'subCategories'
        ])->get();

        $sub = SubCategory::all();
        $types = Type::all();
        /*  $sub=Type::with(['typeSub.subcategories'])->get(); */

        /* dd(json_decode(json_encode($sub))); */
        $categories = \App\Category::orderBy('category', 'asc')->get();
        // dd(json_decode(json_encode($categories)));


        return view('frontend.home.home', compact(['categories', 'type', 'sub', 'types']));
    }

    public function menu()
    {

        $type = TypeSubcategory::with([
            'types.categories',
            'subCategories'
        ])->get();

        $sub = SubCategory::all();
        $types = Type::all();
        /*  $sub=Type::with(['typeSub.subcategories'])->get(); */

        /* dd(json_decode(json_encode($sub))); */
        $categories = \App\Category::orderBy('category', 'asc')->get();
        // dd(json_decode(json_encode($categories)));

     
             foreach($categories as $c){               
            
              echo '<li>
              <a href="'. route("categories.show",$c->slug) .'">
                                      <i  class="icon icon-'.$c->icon.'" style="margin-right: 5%;"></i>         
                                    '.$c->category.'</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">';
                     foreach ($types as $t){ 
                        if($t->category_id == $c->id){
                            echo '<div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header">'.$t->type.'<span></span></h4>
                                                <ul class="group-link-default">';
                         foreach ($type as $s){                                
                             if ($t->id == $s->type_id){
                                 echo '<li><a href="#">'.$s->subcategories ->sub_category.'</a></li>';
                             } 
                                                
                
                     
                         }
                                 echo '</ul>
                                         </div>';
                        }
         
             
                    }
                                       echo '
                                        </div>
                                    </div>
                                </li>'         
              ;}
       
    die();
    }
}
