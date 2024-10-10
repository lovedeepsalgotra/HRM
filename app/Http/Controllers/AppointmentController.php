<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class AppointmentController extends Controller
{
    public function viewappointment()
    {
        $pagename = "Appointment";

       return view('appointment.addappointment', compact('pagename'));

    }
    public function insertappointment(Request $request)
    {

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $mobileno = $request->mobileno;
        $email = $request->email;
        $message = $request->message;
        $date = $request->date;
        $time = $request->time;
    

   
            $data = array(

            "firstname" => $firstname,
            "lastname" => $lastname,
            "mobileno" => $mobileno,
            "email" => $email,
            "message" => $message,
            "date" => $date,
            "time" => $time,

        );

       
        Appointment::insert($data);

         $appointmentmail=$request->all();


 $adminEmail = "navneetk5kwt@gmail.com";
        Mail::to($adminEmail)->send(new TestMail($appointmentmail));

        
        return redirect()->route('home')
            ->with('success2', 'Appoinment Submit Succefull');


    }
 
    public function appointmentlist()
    {
        $pagename = "Appointment";
        $appointmentlist = Appointment::orderBy('id','desc')->get();

     
        // dd($appointment_list);

        // {{$appointment_list->firstname}}
       
    
        return view('appointment.appointmentlist', compact('appointmentlist', 'pagename'));

    }

    public function editappointment (Request $request,$id)
     {

      $pagename = "Appointment";

          $getappointmentdata = Appointment::where('id', $id)->first();

        return view('appointment.appointmentedit', compact('getappointmentdata', 'pagename'));

    }
    

    public function updateappointment(request $request)
    {

        $id = $request->id;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $mobileno = $request->mobileno;
        $email = $request->email;
        $message = $request->message;
        $DOb = $request->DOb;
        $time = $request->time;
    


    $data = array(

        "firstname" => $firstname,
        "lastname" => $lastname,
        "mobileno" => $mobileno,
        "email" => $email,
        "message" => $message,
        "DOb" => $DOb,
        "time" => $time,

    );

 

     Appointment::where('id', $id)->update($data);

              return redirect()->route('appointmentlist')
               ->with('success', 'appointment Update');

    }


         public function deleteappointment( $id)
      {
           
              Appointment::where('id', $id)->delete();
           
            return redirect()
                ->route('appointmentlist')
                ->with('success', 'appointment Delete');
        }
    



}






