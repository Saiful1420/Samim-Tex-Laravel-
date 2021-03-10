<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function customer(){
        $customer=Customer::all();

        return view('admin.Customer.customer',[
            'customer'=>$customer
        ]);


    }


public function store(Request $request){

    $image=$request->file('image');
    $name=uniqid().$image->getClientOriginalName();
    $uploadPath='public/company/';
    $image->move($uploadPath,$name);
    $imageUrl=$uploadPath.$name;
    $this->img($request,$imageUrl);

    return redirect()->back();
 }
        public function img($request,$imageUrl){

              $customer=new Customer();
              $customer->company_name=$request->name;
              $customer->image=$imageUrl;
              $customer->save();
      }
       //delete....................................................................
    public function delete($id){
        $customer=Customer::find($id);
        $customer->delete();
        return redirect('/customers')->with('status',' Slider Delete successfully');
    }


//edit.....................................................
    public function edit($id){
        $data=Customer::find($id);
       return $data;
    }


//update.......................................
       public function update(Request $request){
        $imageById = Customer::find($request->id);
        $images=$request->file('image');


        if ($images) {
            $name=uniqid().$images->getClientOriginalName();
            $uploadPath='public/company/';
            $images->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;

        } else {
            $imageUrl = $imageById->image;
        }
         $this->imge($request,$imageUrl);
         return redirect()->back();
      }
          public function imge($request,$imageUrl){
                 $customer=Customer::find($request->id);
                 $customer->company_name=$request->name;
                 $customer->image=$imageUrl;
                 $customer->save();
          }
        }
