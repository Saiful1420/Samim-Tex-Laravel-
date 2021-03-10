<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Carrer;
use DB;

class CarrersController extends Controller
{
    public function carrers(){
        $department=Department::all();
        $career=Carrer::all();

        return view('admin.Careers.careers',[
            'department'=>$department,
            'career'=>$career
        ]);


    }



public function store(Request $request){

    $carrers=new Carrer();
    $carrers->department_name=$request->department_name;
    $carrers->requirements=$request->requirements;
    $carrers->save();
  //   dd($carrers);
    return redirect()->back();
}

//edit.....................................................
public function edit($id){
    $data=Carrer::find($id);
   return $data;
}

//update.......................................
  public function update(Request $request){
    $carrers=new Carrer();
    $carrers->department_name=$request->department_name;
    $carrers->requirements=$request->requirements;
    $carrers->save();
    return redirect()->back();
      }



 //delete....................................................................
public function delete($id){
    $carrers=Carrer::find($id);
    $carrers->delete();
     return redirect('/careers')->with('status',' Slider Delete successfully');
}

}



