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
      //method
    public function job($_AnnoLicenziamento) {
        if(is_int($this->AnnoLicenziamento)) {
            throw new Exception ('Dipendete Licenziato');
        } else if (! is_int($this->AnnoLicenziamento)) {
            throw new Exception ('Dipendente non licenziato');
        }
        return $_AnnoLicenziamento;
    }
}



