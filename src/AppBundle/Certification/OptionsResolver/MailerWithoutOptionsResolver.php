<?php

namespace AppBundle\Certification\OptionsResolver;


class MailerWithoutOptionsResolver
{

    protected $options;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function sendMail()
    {
        $mail = new Mail();

        $mail->setHost(isset($this->options['host'])
            ? $this->options['host']
            : 'smtp.example.org');

        $mail->setUsername(isset($this->options['username'])
            ? $this->options['username']
            : 'user');

        $mail->setPassword(isset($this->options['password'])
            ? $this->options['password']
            : 'pa$$word');

        $mail->setPort(isset($this->options['port'])
            ? $this->options['port']
            : 25);

    }
}