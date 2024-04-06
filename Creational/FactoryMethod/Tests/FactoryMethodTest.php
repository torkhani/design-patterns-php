<?php

namespace DesignPatternsPHP\Creational\FactoryMethod\Tests;

use DesignPatternsPHP\Creational\FactoryMethod\CourierNotifierFactory;
use DesignPatternsPHP\Creational\FactoryMethod\ElectronicNotifierFactory;
use DesignPatternsPHP\Creational\FactoryMethod\Email;
use DesignPatternsPHP\Creational\FactoryMethod\Post;

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCourierNotifierFactory()
    {
        $factory = new CourierNotifierFactory();
        $notifier = $factory->getNotifier("Post", "Avenue des Champs-Elysees 75008 Paris");
        $this->assertInstanceOf(Post::class, $notifier);
    }

    public function testElectronicNotifierFactory()
    {
        $factory = new ElectronicNotifierFactory();
        $notifier = $factory->getNotifier("Email", "test@example.com");
        $this->assertInstanceOf(Email::class, $notifier);
    }
}