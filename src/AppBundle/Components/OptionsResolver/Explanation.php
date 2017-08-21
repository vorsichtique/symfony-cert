<?php

namespace AppBundle\Components\OptionsResolver;


class Explanation
{
    function __construct()
    {
        $without = new MailerWithoutOptionsResolver(
            [
                'host' => 'host',
                'password' => 'im a password'
                ]
        );
        $without->sendMail();
        dump($without);
        $with = new MailerWithOptionsResolver();
        dump($with);
    }
}