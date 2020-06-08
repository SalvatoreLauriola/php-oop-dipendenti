<?php

include_once __DIR__ . '/Matricola.php';

class Salario extends Matricola {

    //Properties
    public $NumFamiliari;
    public $StipLordo;

    //constructor
    public function __construct($_name, $_surname, $_age, $_IdDipendente, $_AnnoAssunzione, $_AnnoLicenziamento, $_NumFamiliari, $_StipLordo) {
        parent::__construct($_name, $_surname, $_age, $_IdDipendente, $_AnnoAssunzione, $_AnnoLicenziamento);

        $this->NumFamiliari = $_NumFamiliari;
        $this->StipLordo = $_StipLordo;
    }

    //method
}