<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Jobs\SendEmailJob;


use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
      
        // $name = 'TCO';
        // Mail::to('sveta.simonyan.95@gmail.com')
        //     ->send(new SendMailable($name));

        dispatch(new SendEmailJob());

        echo 'email sent';
}

}
