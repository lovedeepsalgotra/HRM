<?php
namespace App\Http\Controllers;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class TestimonialContoller extends Controller
{
    public function viewtestimonial()
    {

        $pagename = "Testimonial";

        return view('testimonial.addtestimonial', compact('pagename'));
    }

    public function inserttestimonial(Request $request)
    {

        $tesdescription = $request->tesdescription;
        $authorname = $request->authorname;

        $data = array(

            "tesdescription" => $tesdescription,
            "authorname" => $authorname,
        );

        Testimonial::insert($data);

        return redirect()->route('viewtestimonial',)
            ->with('success2', 'World insert sucess');

    }

    public function testimoniallist()
    {
        $pagename = "Testimonial";

        $testimoniallist = Testimonial::paginate(5);

        return view('testimonial.testimoniallist', compact('testimoniallist', 'pagename'));

    }

    public function testimonialedit(Request $request, $id)
    {

        $pagename = "Testimonial";

        $gettestimonialdata = Testimonial::where('id', $id)->first();

        return view('testimonial.edittestimonial', compact('gettestimonialdata', 'pagename'));

    }

    public function updatetestimonial(request $request)
    {
        $id = $request->id;
        $tesdescription = $request->tesdescription;
        $authorname = $request->authorname;

        $data = array(

            "id" => $id,
            "tesdescription" => $tesdescription,
            "authorname" => $authorname,
        );

        Testimonial::where('id', $id)->update($data);

        return redirect()->route('testimoniallist')
            ->with('success', 'Testimonial Update');

    }

    public function testimonialdelete($id)
    {

        $user = Testimonial::where('id', $id)->delete();

        return redirect()
            ->route('testimoniallist')
            ->with('success', 'Testimonial Deleted');
    }

}

