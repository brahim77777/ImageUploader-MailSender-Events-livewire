<?php

namespace App\Listeners;

use App\Events\NewUpload;
use App\Mail\SendMark;
use App\Mail\UploadedMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class AlertUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUpload $event): void
    {
        $user = User::find(1);
        Mail::to('ezzahra@gmail.com')->send(new SendMark());

        Mail::to('brahim@gmail.com')->send(new UploadedMail());
    }
}
