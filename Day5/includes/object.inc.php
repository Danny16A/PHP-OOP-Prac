<?php

class NewObject{
    public $type;
    public $name;

    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function getProperty()
    {
        return $this->name;
    }
}