<?php

namespace DesignPatternsPHP\Creational\SimpleFactory;

class SMS extends Notifier 
{
    public function validateTo(): bool 
    {
        $pattern = '/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/';
        $isPhone = preg_match($pattern, $this->to);
        return $isPhone ? true : false;
    }

    public function sendNotification(): string 
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid phone number.");
        }
        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . ".";
    }
}