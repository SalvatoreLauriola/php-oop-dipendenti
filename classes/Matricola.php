<?php

include_once __DIR__ . '/Persona.php';
// include_once __DIR__ . '/traits.php';

class Matricola extends Persona {

    //import traits

    //properties
    public $IdDipendente;
    public $AnnoAssunzione;
    public $AnnoLicenziamento;

    //constructor
    public function __construct($_name, $_surname, $_age, $_IdDipendente, $_AnnoAssunzione, $_AnnoLicenziamento) {
        parent::__construct($_name, $_surname, $_age);

        $this->IdDipendente = $_IdDipendente;
        $this->AnnoAssunzione = $_AnnoAssunzione;
        $this->AnnoLicenziamento = $_AnnoLicenziamento;
        
    }

    //method
}