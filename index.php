<?php

require 'vendor/autoload.php';

use DesignPatternsPHP\Creational\SimpleFactory\NotifierFactory;

$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();
$email = NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();
 