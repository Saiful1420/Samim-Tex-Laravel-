<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
class CustomerController extends Controller
{
    public function customer(){
        $customer =Customer::all();
    return view('FrontEnd.All.customer',[
        'customer'=>$customer
    ]);

}
}
