<?php

namespace App\Mail;

use App\Models\Plane;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Cancel extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Plane $plane)
    {
        $this->user = $user;
        $this->plane = $plane;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('予約を取り消しました')->view('emails.cancel')->with(['user' => $this->user,'plane' => $this->plane]);
    }
}
