<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Jobs\SendContactEmail;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function __invoke(EmailRequest $request)
    {
        $data = $request->validated();

        SendContactEmail::dispatch($data);

        return redirect()->route('home')->with('success', 'Email sent successfully!');
    }
}
