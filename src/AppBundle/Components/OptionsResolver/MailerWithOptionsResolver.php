<?php


namespace AppBundle\Components\OptionsResolver;

use \Symfony\Component\OptionsResolver\OptionsResolver;


class MailerWithOptionsResolver
{
    protected $options;

    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'host'       => 'smtp.example.org',
            'username'   => 'user',
            'password'   => 'pa$$word',
            'port'       => 25,
            'encryption' => null,
        ));
    }

    public function sendMail($from, $to)
    {
        $mail = new Mail();

        $mail->setHost($this->options['host']);
        $mail->setUsername($this->options['username']);
        $mail->setPassword($this->options['password']);
        $mail->setPort($this->options['port']);

    }
}