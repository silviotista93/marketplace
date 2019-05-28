<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class agreeRequest extends Mailable
{
    use Queueable, SerializesModels;
    private $name;    
    private $lastName;    
    private $store;
    private $password;
    private $observacion;
    private $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$lastName,$store,$password,$observacion)
    {
     
        $this->name=$name;        
        $this->lastName=$lastName;        
        $this->store=$store;
        $this->password=$password;
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
        ->markdown('emails.agree_request')
        ->with('name',$this->name)        
        ->with('lastName',$this->lastName)        
        ->with('store',$this->store)
        ->with('password',$this->password)
        ->with('observacion',$this->observacion)
        ->with('email',$this->email);
    }
}
