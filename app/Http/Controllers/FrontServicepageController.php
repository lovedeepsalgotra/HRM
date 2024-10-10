<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;


class FrontServicepageController extends Controller
{
    public function servicepage()
    {
      
       
  $pagename="servicepages";
        $servicepage= Services::select('icons.classname', 'Services.*')
        ->leftJoin('icons', 'icons.id', '=', 'Services.icon')
        ->paginate(9);


        
      

        return view('frontend.services', compact('servicepage','pagename'));

        //    return view('pages.tables',$doctorlist);
        

        
    }

    public function singlepage(request $request)
    {


               $id=$request->id;
                $pagename=$id;


        $getalldata= Services::select('icons.iconname', 'Services.*')
        ->leftJoin('icons', 'icons.id', '=', 'Services.icon')->get();
        $getdata= Services::select('icons.iconname', 'Services.*')
        ->leftJoin('icons', 'icons.id', '=', 'Services.icon')
        ->where('Services.id',$id)
        ->first();
            

        return view('frontend.singleservice', compact('getalldata','getdata','pagename'));

        //    return view('pages.tables',$doctorlist);
        

        
    }
}
