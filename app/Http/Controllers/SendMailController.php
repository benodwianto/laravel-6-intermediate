<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
        SendMailJob::dispatch()->delay(now()->addSecond(5));
        echo 'Email sent!';
    }
}
