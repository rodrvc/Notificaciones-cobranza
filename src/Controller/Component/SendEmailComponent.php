<?php
namespace App\Mailer;
use Cake\Mailer\Email;



$email = new Email();
$email
    ->template( 'plantilla')
    ->emailFormat('html')
    ->to('rodrigovalladares.dev@gmail.com')
    ->from('app@domain.com')
    ->setDomain('www.example.org')
    ->send();




