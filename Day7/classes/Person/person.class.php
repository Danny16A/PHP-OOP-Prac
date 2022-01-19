<?php

namespace Person;

class Person
{
    public $name;
    public $eyeColor;
    public $age;

    public static $status = 'single';

    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function __destruct()
    {
    }
    
    public function getStatus()
    {
        return self::$status;
    }

    public static function setStatus($newStatus)
    {
        self::$status = $newStatus;
    }

    public function getPerson(){
        $person = $this->name . " is " . $this->age . " years old!";
        return $person;
    }
}
