<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RejectedRequest extends Mailable
{
    use Queueable, SerializesModels;
    private $name;    
    private $lastName;    
    private $store;
    private $observacion;
    private $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$lastName,$store,$observacion)
    {
        $this->name=$name;        
        $this->lastName=$lastName;        
        $this->store=$store;       
        $this->observacion=$observacion;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Soicitud de tu tienda para'.config('app.name'))
        ->markdown('emails.rejected_request')
        ->with('name',$this->name)        
        ->with('lastName',$this->lastName)        
        ->with('store',$this->store)        
        ->with('observacion',$this->observacion)
        ->with('email',$this->email);
    }
}
