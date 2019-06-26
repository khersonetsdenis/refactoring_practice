<?php

//Hint - Dependency Inversion Principle
interface MailerInterface
{
}

class Mailer implements MailerInterface
{
}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}

