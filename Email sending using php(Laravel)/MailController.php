<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestGmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from Web Programming Course',
            'body' => 'Hope you are doing great. Final exams are near. !Good Luck!'
        ];
       
        Mail::to('maazrehan@ciitwah.edu.pk')->send(new \App\Mail\TestGmail($details));
       
        return ("Email has been sent successfully.");    
    }
}
