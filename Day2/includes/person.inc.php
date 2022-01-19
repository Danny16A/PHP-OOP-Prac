<?php 

class Person {
    protected $first = "Danny";
    protected $last = "Nguyen";
    protected $age = "22";
}

class Pet extends Person {
    public function owner(){
        $a = $this->first;
        return $a;
    }
}

