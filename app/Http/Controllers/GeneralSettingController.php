<?php
namespace App\Http\Controllers;
use App\Models\GeneralSetting;

use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

    public function addsetting(request $request)
    {

        $video = $request->video;
        $logo = $request->logo;
        $copyright = $request->copyright;
        $phoneno = $request->phoneno;
        $openhours = $request->openhours;
        $image = $request->image;
        $address = $request->address;
        $email = $request->email;
        $abouttitle = $request->abouttitle;
        $aboutdes = $request->aboutdes;
        $facebook = $request->facebook;
        $linkedin = $request->linkedin;
        $instagram = $request->instagram;
        $cin = $request->cin;


        $data = array(

            'id' => 1,

            "phoneno" => $phoneno,
           

            "copyright" => $copyright,
            "openhours" => $openhours,
            "address" => $address,
            "email" => $email,
            "aboutdes" => $aboutdes,
            "abouttitle" => $abouttitle,

            "facebook" => $facebook,
            "linkedin" => $linkedin,
            "instagram" => $instagram,
            "cin" => $cin,

        );

           if ($image != NULL)
        {
            $image = time() . '.' . $request
                ->image
                ->extension();

            $request
                ->image
                ->move(public_path('logo') , $image);

            $data['image'] = $image;

        }


        if ($video != NULL)
        {
            $video = time() . '.' . $request
                ->video
                ->extension();

            $request
                ->video
                ->move(public_path('bannervideo') , $video);

            $data['video'] = $video;

        }

        if ($logo != null)
        {

            $logo = time() . '.' . $request
                ->logo
                ->extension();

            $request
                ->logo
                ->move(public_path('logo') , $logo);

            $data['logo'] = $logo;

        }

        GeneralSetting::upsert([$data], ['logo', 'video', 'copyright', 'logo', 'phoneno', 'openhours', 'address', 'email', 'aboutdes', 'abouttitle', 'video', 'facebook', 'linkedin', 'instagram','cin']);

        return redirect()->route('viewsetting');

    }

    public function viewsetting(request $request)
    {
        $pagename = "General Setting";

        $getsettingdata = GeneralSetting::where('id', 1)->first();

        return view('generalsetting.addsetting', compact('getsettingdata', 'pagename'));

    }
    public function contactus(request $request)
    {
        $pagename="contactus";

        $contactus = GeneralSetting::where('id', 1)->first();

        return view('frontend.contactus', compact('contactus','pagename'));

    }
}

