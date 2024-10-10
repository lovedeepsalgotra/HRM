<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Icon;
use App\Models\Services;

use Illuminate\Http\Request;
use App\Models\Doctorlist;
use App\Models\Department;

class DoctorController extends Controller
{

    public function icons()
    {

        $icons = Icon::all();

        return $icons;

    }
    
       public function department()
    {

        $department = Department::all();

        return $department;

    }
    
    public function viewdoctor()
    {
        $pagename = "Doctors";
        $icons = $this->icons();        
        $departmentname = $this->department();
        
          
        
       
        
       
        return view('doctors.adddoctor', compact('pagename', 'icons','departmentname'));

    }
    public function adddoctor(Request $request)
 {
        

       
            $imageName = $request->image;
            $name = $request->name;
            $experience=$request->experience;
            $language=$request->language;
            $department = $request->department;
            $description = $request->description;
            $mobileno = $request->mobileno;
            $email = $request->email;
            $icon = $request->icon;
            $iconlink = $request->iconlink;
            $facebooklink = $request->facebooklink;
            $twiterlink = $request->twiterlink;
            $linkedinlink = $request->linkedinlink;

            if ($imageName == null)
            {
                $data = array(

                    "name" => $name,
                    "department" => $department,
                    "description" => $description,
                     "experience" => $experience,
                    "language" => implode(',', $language),
                    "mobileno" => $mobileno,
                    "email" => $email,
                    "facebooklink" => $facebooklink,
                    "twiterlink" => $twiterlink,
                    "linkedinlink" => $linkedinlink,
                    "icon" => $icon,
                    "iconlink" => $iconlink,
                );

            }
            else
            {
                $imageName = time() . '.' . $request
                    ->image
                    ->extension();
                $request
                    ->image
                    ->move(public_path('DoctorlistImage') , $imageName);

                $data = array(
                    "image" => $imageName,
                    "name" => $name,
                    "department" => $department,
                    "description" => $description,
                    "mobileno" => $mobileno,
                    "email" => $email,
                    "experience" => $experience,
                    "language" => implode(',', $language),
                    "facebooklink" => $facebooklink,
                    "twiterlink" => $twiterlink,
                    "linkedinlink" => $linkedinlink,
                    "icon" => $icon,
                    "iconlink" => $iconlink,
                );
               
            
            Doctorlist::insert($data);
            }

        return redirect()->route('doctorlist')
            ->with('success2', 'World insert sucess');
    }

    public function doctorlist()
    {
        $pagename = "Doctors";

        $doctorlist = Doctorlist::select('icons.iconname', 'Doctorlist.*')->leftJoin('icons', 'icons.id', '=', 'Doctorlist.icon')
            ->paginate(25);

        return view('doctors.tables', compact('doctorlist', 'pagename'));

        //    return view('pages.tables',$doctorlist);
        

        
    }

    public function deletedoctor($id)
    {

        $user = Doctorlist::where('id', $id)->delete();

        return redirect()
            ->route('doctorlist')
            ->with('success', 'Doctor Deleted');
    }

    public function editdoctor(Request $request, $id)
    {

        $pagename = "Doctors";

        $icons = $this->icons();
         $departmentname = $this->department();

        $getdocdata = Doctorlist::where('id', $id)->first();
        

        return view('doctors.doctoredit', compact('getdocdata', 'pagename', 'icons','departmentname')); 

    }

    public function updatedoctor(Request $request)
    {

      

        

         

            $id = $request->id;
               $newimage = $request->newimage;
            $name = $request->name;
              $experience=$request->experience;
            $language=$request->language;

            $department = $request->department;
            $description = $request->description;
            $mobileno = $request->mobileno;
            $email = $request->email;
          
            $facebooklink = $request->facebooklink;
            $twiterlink = $request->twiterlink;
            $linkedinlink = $request->linkedinlink;

            if ($newimage != NULL)
            {

                $newimage = time() . '.' . $request
                    ->newimage
                    ->extension();

                $request
                    ->newimage
                    ->move(public_path('DoctorlistImage') , $newimage);

                $data = array(
                    "id" => $id,
                    "image" => $newimage,
                    "name" => $name,
                     "experience" => $experience,
                    "language" => implode(',',$language),
                    "department" => $department,
                    "description" => $description,
                    "mobileno" => $mobileno,
                    "email" => $email,
                    "facebooklink" => $facebooklink,
                    "twiterlink" => $twiterlink,
                    "linkedinlink" => $linkedinlink,
                   
                );

            }
            else
            {
                $data = array(
                    "id" => $id,
                    "name" => $name,
                    "department" => $department,
                     "experience" => $experience,
                    "language" => implode(',',$language),
                    "description" => $description,
                    "mobileno" => $mobileno,
                    "email" => $email,
                    "facebooklink" => $facebooklink,
                    "twiterlink" => $twiterlink,
                    "linkedinlink" => $linkedinlink,
                   
                );

            }
     

            Doctorlist::where('id', $id)->update($data);

      
return redirect()->route('doctorlist')
            ->with('success', 'Doctors Update');
        

    }
    
    
 

}

