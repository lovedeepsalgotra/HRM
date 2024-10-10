<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


       public $appointmentmail;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointmentmail)
    {
        // dd($order);
        $this->appointmentmail = $appointmentmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


 

 return $this->subject('New  Appoinment')->view('emails.appointments')
         ->with([
            'firstname' => $this->appointmentmail['firstname'],
            'lastname' => $this->appointmentmail['lastname'],
            'date' => $this->appointmentmail['date'],
            'time' => $this->appointmentmail['time'],
             'mobileno' => $this->appointmentmail['mobileno'],
              'email' => $this->appointmentmail['email'],
              'message2' => $this->appointmentmail['message2'],
       
        ]);
                                  
    }
}