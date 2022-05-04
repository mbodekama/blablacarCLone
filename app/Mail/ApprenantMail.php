<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApprenantMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $observ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name=NULL, $observ=NULL)
    {
        $this->name = is_null($name) ? "" : $name;
        $this->observ = is_null($observ) ? "" : $observ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Si cest une observation qui es soumise
        if ($this->observ!="") 
        {
            return $this->from('maatacademy225@gmail.com')

                    ->markdown('emails.apprenant.profObserv');
        }

            //Sinon cest une notification
            return $this->from('maatacademy225@gmail.com')
                    ->markdown('emails.apprenant.accuseDeReception');



    }
}
