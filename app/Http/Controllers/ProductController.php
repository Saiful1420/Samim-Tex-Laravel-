<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
  public function product(){

//join table value show
    $product = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.catagory')
            ->select('products.*', 'categories.name')
             ->get();
             //dd($product);

    return view('admin.Product.product',[
        'product'=>$product
    ]);
  }

  public function store(Request $request){

    $image=$request->file('image');
    $name=uniqid().$image->getClientOriginalName();
    $uploadPath='public/image/';
    $image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;
    $this->img($request,$imageUrl);

    return redirect()->back();
 }
      public function img($request,$imageUrl){

              $product=new Product();
              $product->catagory=$request->catagory;
              $product->product_name=$request->product_name;
              $product->image=$imageUrl;
              $product->save();
      }

//eddit.....................................................
       public function edit($id){
              $data=Product::find($id);
             return $data;
          }

          
//update.......................................
  public function update(Request $request){

    $newsById = Product::find( $request->id);
    $image=$request->file('image');

    if ($image) {
       // unlink($image);
        $name=uniqid().$image->getClientOriginalName();
        $uploadPath='public/image/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;

    } else {
        $imageUrl = $newsById->image;
    }
     $this->imge($request,$imageUrl);
     return redirect()->back();
  }
      public function imge($request,$imageUrl){
             $product=Product::find($request->id);
             $product->catagory=$request->catagory;
              $product->product_name=$request->product_name;
              $product->image=$imageUrl;
              $product->save();
      }

      //delete....................................................................
    public function delete($id){
        $product=Product::find($id);
        $product->delete();
         return redirect('/products')->with('status',' Slider Delete successfully');
    }

}
