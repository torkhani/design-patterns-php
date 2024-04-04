<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\SimpleFactory\Tests;

use DesignPatternsPHP\Creational\SimpleFactory\SMS;
use DesignPatternsPHP\Creational\SimpleFactory\Email;
use DesignPatternsPHP\Creational\SimpleFactory\NotifierFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testGetNotifier()
    {
        $smsNotifir = NotifierFactory::getNotifier("SMS", "07111111111");
        $this->assertInstanceOf(SMS::class, $smsNotifir);
        $emailNotifir = NotifierFactory::getNotifier("Email", "test@example.com");
        $this->assertInstanceOf(Email::class, $emailNotifir);
    }
}