<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class agent_mail extends Controller
{
    public function send_email()
    {
        $data = [
            'subject' => "Rm delivery agent invitation",
            'body' => "hello from rm delivery"];

        // try {
        //     Mail::to('mdsantusarker@gmail.com')
        //         ->send(new MailAgentNotify());
        //     return "mail send successfull";
        // } catch (Exception $excep) {
        //     return "failed to send mail" . $excep;
        // }
        return view('email.agents_confirm');
    }

}
