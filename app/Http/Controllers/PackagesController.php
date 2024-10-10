<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PackagesCategory;
use App\Models\Packages;
use App\Models\PackageTest;
use App\Models\PackageSubtitle;
use App\Models\PackageAss_Category;
use App\Models\Diagnostic;
use App\Models\Diagnostics_test;
use App\Models\Diagnostic_subtitles;
use DB;
class PackagesController extends Controller
{

    public function viewcategoryform()
    {

        $pagename = "Packages";

        return view('packages.addcategory', compact('pagename'));

    }

    public function addcategory(Request $request)
    {

        $id = $request->id;
        $category_name = $request->category_name;

        $data = array(
            "category_name" => $category_name,

        );

        $category = PackagesCategory::create($data);

    }

    public function viewpackageform()
    {
        $pagename = "Packages";
        $packagescategorylist = PackagesCategory::get();
        return view('packages.addpackage', compact('packagescategorylist', 'pagename'));

    }

    public function addpackage(Request $request)
    {

       
        $title = $request->title;
        $price = $request->price;
        $description = $request->description;
        $category_id = $request->category_id;
          $img = $request->img;
        
         if ($img == null){

        $data = array(
            
            "title" => $title,
            "price" => $price,
            "description" => $description,
            "category_id" => $category_id,

        );
        
         }
         else{
             
             $img = time() . '.' . $request
                    ->img
                    ->extension();
                $request
                    ->img
                    ->move(public_path('package') , $img);
              $data = array(
            "img" => $img,
            "title" => $title,
            "price" => $price,
            "description" => $description,
            "category_id" => $category_id,

        );
             
         }
        $package = Packages::create($data);

        $package_id = $package->id;
        $category_id = $request->category_id;
        
      
        

        $data = array(
            "package_id" => $package_id,
            "category_id" => $category_id,

        );
           

        $assign_category = PackageAss_Category::create($data);  
        $subtitle = $request->package;

        $content = "";
        foreach ($subtitle as $key => $subtitles)
        {

            $content .= '<ul>' . $subtitle = $subtitles[0];

            $data = array(
                "package_id" => $package_id,
                "subtitle" => $subtitle,

            );

            $packagesubtitle = PackageSubtitle::create($data);

            $subtitle_id = $packagesubtitle->id;
            //  $package_id=$packagesubtitle->package_id;
            

            $count = str_replace('subtitle', "", $key);

            foreach ($subtitles['test_name' . $count] as $test)
            {

                $test_name = $test;
                $data = array(
                    "test_name" => $test_name,
                    "package_subtitle_id" => $subtitle_id,
                    "package_id" => $package_id,
                );

                $packagetest = PackageTest::create($data);

                $content .= '<li>' . $test . '</li>';

            }
            $content .= '</ul>';
        }
        return redirect()->route('packagelist')
            ->with('success2', 'Package insert sucess');

    }

    public function packagelist()
    {

        $pagename = "package list";

        $packagelist = Packages::paginate(25);

       
        return view('packages.packagelist', compact('packagelist', 'pagename'));

    }

    public function deletepackage($id)
    {
        $packageid = Packages::where('id', $id)->delete();
        $packagesubtitle = PackageSubtitle::where('package_id', $id)->delete();
        $package_tests = PackageTest::where('package_id', $id)->delete();

        return redirect()
            ->route('packagelist')
            ->with('success', 'package Deleted');
    }

    public function editpackage(Request $request, $id)
    {

        
        $pagename = "package list";
        $assign_category = PackageAss_Category::where('package_id',$id)->first();
       
        
            $getpacdata = Packages::where('id', $id)->first();
              $getsubdata = PackageSubtitle::where('package_id', $id)->get();
                $gettestdata = PackageTest::where('package_id', $id)->get();
                $packagescategorylist = PackagesCategory::get();
       
        
//   $packagelist=Packages::select('packages.*','package_subitles.subtitle','package_tests.test_name')
//           ->join('package_subitles','package_subitles.package_id','packages.id')
//           ->join('package_tests','package_tests.package_subtitle_id','package_subitles.id')
//           ->first();
          
         
       
        
          
        return view('packages.editpackage', compact('pagename','getpacdata','getsubdata','gettestdata','packagescategorylist','assign_category'));
    }
    
    public function updatepackage(Request $request){
        $id=$request->id;
    
         $newimg = $request->newimg;
        $title = $request->title;
        $price = $request->price;
        $description = $request->description;
        
         if ($newimg != NULL)
            {

                $newimg = time() . '.' . $request
                    ->newimg
                    ->extension();

                $request
                    ->newimg
                    ->move(public_path('package') , $newimg);

        $data = array(
            "img" => $newimg,
            "title" => $title,
            "price" => $price,
            "description" => $description,

        );
            }
            else{
                  $data = array(
            "img" => $newimg,
            "title" => $title,
            "price" => $price,
            "description" => $description,

        );
                
                
            }


           $package= Packages::where('id', $id)->update($data);


 $package_id=$request->id;
 $category_id = $request->category_id;
        
      
        

        $data = array(
            "package_id" => $package_id,
            "category_id" => $category_id,

        );
        $assign_category = PackageAss_Category::where('package_id', $id)->update($data);

           

     
           
           
            $packagesubtitle = PackageSubtitle::where('package_id', $id)->delete();
        $package_tests = PackageTest::where('package_id', $id)->delete();
   
   
     


        $subtitle = $request->package;

        $content = "";
        foreach ($subtitle as $key => $subtitles)
        {

            $content .= '<ul>' . $subtitle = $subtitles[0];

            $data = array(
                "package_id" => $package_id,
                "subtitle" => $subtitle,
            );
// Doctorlist::where('id', $id)->update($data);
            $packagesubtitle = PackageSubtitle::create($data);

            $subtitle_id = $packagesubtitle->id;
            //  $package_id=$packagesubtitle->package_id;
            

            $count = str_replace('subtitle', "", $key);

            foreach ($subtitles['test_name' . $count] as $test)
            {

                $test_name = $test;
                $data = array(
                    "test_name" => $test_name,
                    "package_subtitle_id" => $subtitle_id,
                    "package_id" => $package_id,
                );

                $packagetest = PackageTest::create($data);

                $content .= '<li>' . $test . '</li>';

            }
            $content .= '</ul>';
        }
        return redirect()->route('packagelist')
            ->with('success2', 'Package Updated Sucessfuly');
        
    }





       public function viewdiagnostics()
    {

        $pagename = "Treatments/Tests";

        return view('diagnostics.adddiagnostics', compact('pagename'));

    }

    public  function adddiagnostics(Request $request){

// dd($request->all());

$name = $request->name;
$title = $request->Title;
$description = $request->Short_des;

$data = array(

"name" => $name,
"Title" => $title,
"Short_des" => $description,
"category" => $request->test_type,

);

$diagnostic_record = Diagnostic::create($data);

foreach($request->diagnostics as $diagnostic){
    $imageName = $diagnostic['image'];
   
    $imgName = "";
    if ($imageName != null)
        {
            
                $imgName = time() . '.' . $imageName->extension();
                $imageName->move(public_path('Diagnostics') , $imgName);

        }
    $data = array(

    "diagnostics_id" => $diagnostic_record->id,
    "subtitle" => $diagnostic['name'],
    "description" => $diagnostic['description'],
    "image" => $imgName,
    
    );
    $subtitle = Diagnostic_subtitles::create($data);
    
    foreach($diagnostic['tests'] as $test){
        $data = array(

        "diagnostics_id" => $diagnostic_record->id,
        "subtitle_id" => $subtitle->id,
        "test_item" => $test['name'],
        "Price" => $test['price'],
        "pointers" => implode('||', $test['pointers']),
        );
        
        Diagnostics_test::create($data);
    }
   
}
        




             return redirect()->route('viewdiagnostics')
            ->with('success2', 'Diagnostic insert sucess');



           




    }
    
    
    public function diagnosticlist()
    {

        $pagename = "Treatments/Tests";

        $diagnosticlist = Diagnostic::get();

       
        return view('diagnostics.diagnosticlist', compact('diagnosticlist', 'pagename'));
              

    }
    
    public function diagnosticstest(){

        $pagename="diagnosticstest";
        $diagnostics = Diagnostic::where('category', 2)->get();
        
        $diagnostic_ids = array();
        
        foreach($diagnostics as $diagnostic){
            $diagnostic_ids[] = $diagnostic->id;
        }
   
         $diagnostic_tests = Diagnostics_test::whereIn('diagnostics_test.diagnostics_id', $diagnostic_ids)
        ->leftJoin('diagnostic_subitles', 'diagnostics_test.subtitle_id', '=', 'diagnostic_subitles.id')
        ->orderBy(DB::raw('RAND()'))
        // ->orderBy('diagnostics_test.id', 'desc')
        ->get();
        // dd($diagnostic_tests);
        
        $diag_test_array = array();
        foreach($diagnostic_tests as $diagnostic_test){
            $diag_test_array[$diagnostic_test->subtitle_id]['tests'][] = $diagnostic_test;
        }
        
        $diagnostic_subtitles = Diagnostic_subtitles::whereIn('diagnostics_id', $diagnostic_ids)->get();
        
        $diag_subtitle_array = array();
        foreach($diagnostic_subtitles as $diagnostic_subtitle){
            
            if(isset($diag_test_array[$diagnostic_subtitle->id])){
                 $diag_subtitle_array[$diagnostic_subtitle->diagnostics_id]['subtitles'][] = array("subtitle" =>$diagnostic_subtitle, "tests"=>$diag_test_array[$diagnostic_subtitle->id]['tests']);
            }else{
                 $diag_subtitle_array[$diagnostic_subtitle->diagnostics_id]['subtitles'][] = array("subtitle" =>$diagnostic_subtitle, "tests"=>[]);
            }
            
           
            
            
        }
        
        foreach($diagnostics as $diagnostic){
            if(isset($diag_subtitle_array[$diagnostic->id])){
                $diagnostic->subtitles = $diag_subtitle_array[$diagnostic->id]['subtitles'];
            }else{
                $diagnostic->subtitles = [];
            }
        }
        
        
        
        // dd($diagnostics);
        return view('frontend.diagnostics', compact('diagnostics','diagnostic_tests','pagename'));

    }
    
    public function dermatologytreatments(){

        $pagename="dermatologytreatments";
        $diagnostics = Diagnostic::where('category', 1)->get();
        
        $diagnostic_ids = array();
        
        foreach($diagnostics as $diagnostic){
            $diagnostic_ids[] = $diagnostic->id;
        }
        
        $diagnostic_tests = Diagnostics_test::whereIn('diagnostics_test.diagnostics_id', $diagnostic_ids)
        ->leftJoin('diagnostic_subitles', 'diagnostics_test.subtitle_id', '=', 'diagnostic_subitles.id')
        ->get();
        // dd($diagnostic_tests);
        $diag_test_array = array();
        foreach($diagnostic_tests as $diagnostic_test){
            $diag_test_array[$diagnostic_test->subtitle_id]['tests'][] = $diagnostic_test;
        }
        
        $diagnostic_subtitles = Diagnostic_subtitles::whereIn('diagnostics_id', $diagnostic_ids)->get();
        
        $diag_subtitle_array = array();
        foreach($diagnostic_subtitles as $diagnostic_subtitle){
            
            if(isset($diag_test_array[$diagnostic_subtitle->id])){
                 $diag_subtitle_array[$diagnostic_subtitle->diagnostics_id]['subtitles'][] = array("subtitle" =>$diagnostic_subtitle, "tests"=>$diag_test_array[$diagnostic_subtitle->id]['tests']);
            }else{
                 $diag_subtitle_array[$diagnostic_subtitle->diagnostics_id]['subtitles'][] = array("subtitle" =>$diagnostic_subtitle, "tests"=>[]);
            }
            
           
            
            
        }
        
        foreach($diagnostics as $diagnostic){
            if(isset($diag_subtitle_array[$diagnostic->id])){
                $diagnostic->subtitles = $diag_subtitle_array[$diagnostic->id]['subtitles'];
            }else{
                $diagnostic->subtitles = [];
            }
        }
        
        
        
        // dd($diagnostics);
        return view('frontend.dermatologytreatments', compact('diagnostics','diagnostic_tests','pagename'));

    }
    
    
    public function deletediagnostic($id)
    {

        $packageid = Diagnostic::where('id', $id)->delete();
        $packagesubtitle = Diagnostics_test::where('diagnostics_id', $id)->delete();
        $package_tests = Diagnostic_subtitles::where('diagnostics_id', $id)->delete();

        return redirect()
            ->route('diagnosticlist')
            ->with('success', 'package Deleted');
    }

    public function editdiagnostic(Request $request, $id)
    {
        
        $pagename = "Treatments/Tests";
        
            $getpacdata = Diagnostic::where('id', $id)->first();
              $getsubdata = Diagnostic_subtitles::where('diagnostics_id', $id)->get();
                $gettestdata = Diagnostics_test::where('diagnostics_id', $id)->get();
                $packagescategorylist = PackagesCategory::get();
       
        
//   $packagelist=Packages::select('packages.*','package_subitles.subtitle','package_tests.test_name')
//           ->join('package_subitles','package_subitles.package_id','packages.id')
//           ->join('package_tests','package_tests.package_subtitle_id','package_subitles.id')
//           ->first();
          
         
       
        
          
        return view('diagnostics.editdiagnostic', compact('pagename','getpacdata','getsubdata','gettestdata','packagescategorylist'));
    }
    
    public function updatediagnostic(Request $request){
        // dd($request->all());
        $id=$request->id;
    

        $name = $request->name;
$title = $request->Title;
$description = $request->Short_des;

$data = array(

"name" => $name,
"Title" => $title,
"Short_des" => $description,
"category" => $request->test_type,

);

$diagnostic_record = Diagnostic::where("id",$id)->update($data);

Diagnostic_subtitles::where("diagnostics_id",$id)->delete();
Diagnostics_test::where("diagnostics_id",$id)->delete();
foreach($request->diagnostics as $diagnostic){
    
    $data = array(

    "diagnostics_id" => $id,
    "subtitle" => $diagnostic['name'],
    "description" => $diagnostic['description'],
   
    
    );
    
   
    $imgName = "";
    if (isset($diagnostic['image']) && $diagnostic['image'] != null)
        {
           
            $imageName = $diagnostic['image'];
             $original_name = str_replace(" ", "", $imageName->getClientOriginalName());
          
                $imgName = time(). $original_name . '.' . $imageName->extension();
                $imageName->move(public_path('Diagnostics') , $imgName);
                 $data["image"] = $imgName;
        }else{
            $data["image"] = $diagnostic['dbimage'];
        }
    
    
    // echo "<pre>";
    // print_r($data);
    $subtitle = Diagnostic_subtitles::create($data);
    
    foreach($diagnostic['tests'] as $test){
        $data = array(

        "diagnostics_id" => $id,
        "subtitle_id" => $subtitle->id,
        "test_item" => $test['name'],
        "Price" => $test['price'],
        "pointers" => implode('||', $test['pointers']),
        );
        
        Diagnostics_test::create($data);
    }
   
}
        




             return redirect()->route('diagnosticlist')
            ->with('success2', 'Diagnostic Update sucess');



           




    }
    
   
 

}

