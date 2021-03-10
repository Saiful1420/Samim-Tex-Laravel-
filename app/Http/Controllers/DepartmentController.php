<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;


class DepartmentController extends Controller
{
   public function department(){
       $department=Department::all();
    return view('admin.Careers.department',[
        'department'=>$department
    ]);
   }



public function store (Request $request) {

    $department=new Department();
    $department->department_name=$request->department_name;
    $department->save();
    return redirect()->back();
// dd($department);

}
      //delete....................................................................
      public function delete($id){
        $department=Department::find($id);
        $department->delete();
         return redirect('/department')->with('status',' Slider Delete successfully');
    }
}
