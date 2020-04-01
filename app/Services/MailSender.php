<?php
/**
 * Created by PhpStorm.
 * User: damir
 * Date: 3/29/20
 * Time: 02:58
 */

namespace App\Services;


use App\Article;
use App\Subscriber;
use Illuminate\Support\Facades\Mail;

class MailSender
{
    public static function send(Article $article)
    {
        $subscribers = Subscriber::pluck('email')->toArray();
        Mail::send('otherViews.mail', ['article' => $article], function ($message) use ($subscribers) {
            $message->to($subscribers)
                ->subject('Посмотри новость');
            $message->from(['maunt@mail.ru', 'umma@mail.ru']);
            $message->sender('damir290598@gmail.com');
        });
    }
}