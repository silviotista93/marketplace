<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $password;

    /**
     * Create a new message instance.
     * @param User $user
     * @param String $password
     * @return void
     */
    public function __construct(User $user, String $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bienvenido a '.config('app.name')." ".$this->user->name." ".$this->user->last_name)
            ->markdown('emails.new_user')
            ->with("user", $this->user)
            ->with("password", $this->password);
    }
}
