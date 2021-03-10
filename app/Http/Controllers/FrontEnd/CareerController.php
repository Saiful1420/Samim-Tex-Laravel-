<?php

namespace App\Http\Controllers\FrontEnd;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carrer;


class CareerController extends Controller
{
    public function career(){
        $career =Carrer::all();
    return view('FrontEnd.All.career',[
        'career'=>$career
    ]);

}
}
