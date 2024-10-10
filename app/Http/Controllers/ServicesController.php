<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Icon;
class ServicesController extends Controller
{

    public function viewservices()
    {
        $pagename = "Services";

        $icons = $this->icons();

        return view('services.addservices', compact('pagename', 'icons'));

    }
    public function insert(Request $request)
    {

        $imagename = $request->image;
        $title = $request->title;
        $tagline = $request->tagline;
        $heading = $request->heading;
        $short_des = $request->short_des;
        $description = $request->description;
        $iconlink = $request->iconlink;
        $icon = $request->icon;

        if ($imagename == null)
        {

            $data = array(

                "title" => $title,
                "tagline" => $tagline,
                "heading" => $heading,
                "short_des" => $short_des,
                "description" => $description,
                "iconlink" => $iconlink,
                "icon" => $icon,

            );

        }
        else
        {

            $imagename = time() . '.' . $request
                ->image
                ->extension();

            $request
                ->image
                ->move(public_path('ServicesImage') , $imagename);

            $data = array(
                "image" => $imagename,
                "title" => $title,
                "tagline" => $tagline,
                "heading" => $heading,
                "short_des" => $short_des,
                "description" => $description,
                "iconlink" => $iconlink,
                "icon" => $icon

            );
        }
        Services::insert($data);

        return redirect()->route('servicelist')
            ->with('success2', 'World insert sucess');

    }

    public function servicelist()
    {
        $pagename = "Services";

        $servicelist = Services::select('icons.iconname', 'Services.*')->leftJoin('icons', 'icons.id', '=', 'Services.icon')
            ->paginate(5);

        return view('services.serviceslist', compact('servicelist', 'pagename'));

        //    return view('pages.tables',$doctorlist);
        

        
    }

    public function editservice(Request $request, $id)
    {

        $pagename = "Services";

        $icons = $this->icons();

        $getservicedata = Services::where('id', $id)->first();

        return view('services.servicesedit', compact('getservicedata', 'pagename', 'icons'));

    }

    public function updateservices(request $request)
    {

        $id = $request->id;
        $newimage = $request->newimage;
        $title = $request->title;
        $tagline = $request->tagline;
        $heading = $request->heading;
        $short_des = $request->short_des;
        $description = $request->description;
        $iconlink = $request->iconlink;
        $icon = $request->icon;

        if ($newimage != Null)
        {

            $newimage = time() . '.' . $request
                ->newimage
                ->extension();

            $request
                ->newimage
                ->move(public_path('ServicesImage') , $newimage);

            $data = array(
                "id" => $id,
                "image" => $newimage,
                "title" => $title,
                "tagline" => $tagline,
                "heading" => $heading,
                "short_des" => $short_des,
                "iconlink" => $iconlink,
                "icon" => $icon,
                "description" => $description,

            );
        }
        else
        {
            $data = array(

                "id" => $id,
                "title" => $title,
                "tagline" => $tagline,
                "heading" => $heading,
                "short_des" => $short_des,
                "iconlink" => $iconlink,
                "icon" => $icon,
                "description" => $description,

            );

        }

        Services::where('id', $id)->update($data);

        return redirect()->route('servicelist')
            ->with('success', 'services Update');

    }

    public function deleteservice($id)
    {

        $user = Services::where('id', $id)->delete();

        return redirect()
            ->route('servicelist')
            ->with('success', 'Service Deleted');
    }

    public function icons()
    {

        $icons = Icon::all();

        return $icons;

    }
}

