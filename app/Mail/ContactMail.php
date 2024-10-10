<?php
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

       public $details;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        // dd($order);
        $this->details = $details;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
 

 return $this->subject('New Query')->view('emails.contact')
         ->with([
            'name' => $this->details['name'],
            'email' => $this->details['email'],
            'subject' => $this->details['subject'],
            'message1' => $this->details['message1'],
       
        ]);
                                  
    }
}