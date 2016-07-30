<?php
/**
 * Created by PhpStorm.
 * User: ksiuha
 * Date: 21.07.16
 * Time: 19:32
 */

namespace App\Services;


use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function sendMail($name, $email, $message){
        return Mail::send('emails.test',
            array(
                'name' => $name,
                'email' => $email,
                'user_message' => $message
            ),function($message) use ($email)
            {
                $message->from($email);
                $message->to('kovalchuk.oksana2@gmail.com', 'Admin')->subject('postform');
            });
    }
}