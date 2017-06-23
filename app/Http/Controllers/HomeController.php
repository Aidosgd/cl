<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Mail;

class HomeController extends Controller
{

    public function mail(Request $request, Mailer $mailer)
    {

        $emails = ['expert.cleaning@bk.ru', 'aidosgd@gmail.com'];

        $mailer->send('emails.mail', ['name' => $request->input('name'), 'phone' => $request->input('phone')], function ($m) use ($emails) {
            $m->from('info@expertcleaning.kz', 'Заявка с сайта EXPERT CLEANING');

            $m->to($emails, 'Aidos')->subject('Заявка с сайта EXPERT CLEANING');
        });

        return redirect('/')->with('message', 'Письмо отправили!');

    }
}
