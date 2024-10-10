<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctorlist;
use App\Models\Appointment;
use App\Models\Testimonial;
use App\Models\Icon;
use App\Models\Services;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $Doctorcount = [];
$Doctorlist = 0;
 $appointmentlist = [];
$appointmentcount = 0;

        $pagename = 'DASHBOARD';
        return view('dashboard', compact('pagename','Doctorlist','appointmentcount'));
    }

    public function home()
    {



        $pagename="home";

    

        return view('welcome', compact('pagename'));

    }


public function narabhit(Request $request)
    {


    \Log::info(json_encode($request));
      return true;

    }

}

