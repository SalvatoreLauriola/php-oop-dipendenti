<?php

class Persona {
    
    //properties
    public $name;
    public $surname;
    public $age;

    //constructor
    public function __construct($_name, $_surname, $_age) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }

    //methods
}