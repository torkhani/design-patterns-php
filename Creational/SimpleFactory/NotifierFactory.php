<?php

namespace DesignPatternsPHP\Creational\SimpleFactory;

class NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'Moetaz');
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}