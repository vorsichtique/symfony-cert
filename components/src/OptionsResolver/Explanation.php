<?php

namespace Malu\OptionsResolver;

require_once __DIR__.'/../../vendor/autoload.php';


class Explanation
{
    function __construct()
    {
        $without = new MailerWithoutOptionsResolver();
        $without->sendMail('', '');
        dump($without);
        $with = new MailerWithOptionsResolver();
        dump($with);
    }
}