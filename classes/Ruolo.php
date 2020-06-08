<?php

include_once __DIR__ . '/Persona.php';

class Ruolo extends Persona {

    //Properties
    public $role;

    //constructor
    public function __construct($_name, $_surname, $_age , $_role) {
        parent::__construct($_name, $_surname, $_age);

        $this->role = $_role;
    }

    //method
}