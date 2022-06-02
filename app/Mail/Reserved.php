<?php

namespace App\Mail;

use App\Models\Plane;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;      //非同期で実行するためにジョブをキューへ投入することをlaravelへ知らせるクラス
use Illuminate\Mail\Mailable;                   //メール送信処理を指定
use Illuminate\Queue\SerializesModels;          //Eloquentをシリアライズするメソッドを持つ

class Reserved extends Mailable
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
        // dd($this->user,$this->plane);
        return $this->subject('予約が完了しました')->view('emails.reserved')->with(['user' => $this->user,'plane' => $this->plane]);
    }
}
