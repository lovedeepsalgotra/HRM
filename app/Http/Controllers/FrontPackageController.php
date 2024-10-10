<?php

namespace App\Http\Controllers;
use App\Models\PackagesCategory;
use App\Models\Packages;
use App\Models\PackageTest;
use App\Models\PackageSubtitle;
use App\Models\PackageAss_Category;
use Illuminate\Http\Request;

class FrontPackageController extends Controller
{
       public function frontpackage(Request $request)
    {

        $categoryid='';

        $pagename = "Packages";
        
      
        
      
        $category=PackagesCategory::get();
        
      
        
     $assign_category= PackageAss_Category::select();
if(isset($request->category)){
        $categoryid=$request->category;
         $assign_category = $assign_category->where('category_id',$categoryid);
            }

            $assign_category = $assign_category->get();





$package_ids = array();
foreach($assign_category as $assign_categorys){

    $package_ids[]=$assign_categorys->package_id;
   



}
  $Packages = Packages::whereIn('id', $package_ids)->get();



    $Packagessubtitle = PackageSubtitle::whereIn('package_id', $package_ids)->get();
   
        
        
        $Packagestest = PackageTest::whereIn('package_id', $package_ids)->get();
        



        $subtitles_test_array = array();
        foreach($Packagestest as $test){
            $subtitles_test_array['subtitle||'.$test->package_subtitle_id][] = $test;
        }
        
        $subtitles_array = array();
        foreach($Packagessubtitle as $subtitle){
            
            $inner_data = array(
                "subtitle" =>  $subtitle,
                "tests" => $subtitles_test_array['subtitle||'.$subtitle->id]
                );
            $subtitles_array['package_id||'.$subtitle->package_id][] = $inner_data;
            
        }
        
         foreach($Packages as  $package){
           
            $package->subtitles =  $subtitles_array['package_id||'.$package->id];
        }
    return view('frontend.packages', compact('Packages','Packagestest','Packagessubtitle','assign_category','category','categoryid','pagename'));

    }

    public function filter(){





    }
}
