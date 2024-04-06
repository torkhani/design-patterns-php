<?php

namespace DesignPatternsPHP\Creational\FactoryMethod;

interface NotifierFactory
{
    public static function getNotifier($notifier, $to);
}