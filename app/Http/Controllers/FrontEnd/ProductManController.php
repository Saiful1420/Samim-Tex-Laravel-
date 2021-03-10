<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductManController extends Controller
{
    public function ProductMan(){

        $men = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.catagory')
            ->select('products.*', 'categories.name',)
            ->where('products.catagory', 1)
             ->get();
          

        $women = DB::table('products')
             ->join('categories', 'categories.id', '=', 'products.catagory')
             ->select('products.*', 'categories.name')
             ->where('products.catagory', 2)
              ->get();

        $kid = DB::table('products')
             ->join('categories', 'categories.id', '=', 'products.catagory')
             ->select('products.*', 'categories.name')
             ->where('products.catagory', 3)
              ->get();

        $lingeries = DB::table('products')
             ->join('categories', 'categories.id', '=', 'products.catagory')
             ->select('products.*', 'categories.name')
             ->where('products.catagory', 4)
              ->get();

        return view('FrontEnd.All.ProductMan',[
            'men'=> $men,
            'women'=> $women,
            'kid'=> $kid,
            'lingeries'=> $lingeries,
        ]);
    }
}
