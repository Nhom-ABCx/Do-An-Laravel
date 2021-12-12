<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail as SendMail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        //gửi đến 0306191113@caothang.edu.vn với dữ liệu là $request
        //nó sẽ gọi đến SendMail.php
        //Mail::to('0306191113@caothang.edu.vn')->send(new SendMail("Tiêu đề"));
        Mail::to('0306191113@caothang.edu.vn')->send(new SendMail($request));
    }
}
