<?php

namespace App\Http\Controllers;
use App\Models\Doctorlist;
use App\Models\Department;

use Illuminate\Http\Request;

class FrontDoctorController extends Controller
{
    
    public function  singledoctor(Request $request){

        $id=$request->id;
        $pagenames=$id;

$pagename="doctors";
  
  
      $department_id="";

        $departmentname = Department::all();
        
   
        
    
        
         $singledoctor = Doctorlist::select('icons.classname', 'Doctorlist.*')
         ->leftJoin('icons', 'icons.id', '=', 'Doctorlist.icon');
if(isset($request->id)){
        $department_id=$request->id;
         $singledoctor = $singledoctor->where('department',$department_id);
            }
            $singledoctor = $singledoctor->paginate(25);
       
         return view('frontend.singledoctor', compact('singledoctor','departmentname','department_id','pagename','pagenames'));
    }
    

}
