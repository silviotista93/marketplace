<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewStoreRequest extends Mailable
{
    use Queueable, SerializesModels;
    private $name;
    private $lastName;
    private $store;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $lastName,$store)
    {
        $this->name=$name;
        $this->lastName=$lastName;
        $this->store=$store;
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
        ->markdown('emails.new_store_request')
        ->with('name',$this->name)
        ->with('lastName',$this->lastName)
        ->with('store',$this->store);
        

    }
}
