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
    public function job($anno) {
        if(! is_int($anno)) {
            throw new Exception ('Dipendete Licenziato');
        } 
    }
}

$mt = new Salario('Michele', 'Rossi', 28, '0620', 1988, 'Null', 4, 2800);


try {
    echo $mt->job('asdsad') . '<br>';
} catch (Exception $e) {
    echo 'Messaggio: ' . $e->getMessage() . '<br>';
}

$dipendenti = [
new Salario('Michele', 'Rossi', 28, '0620', 1988, 'Null', 4, 2800),

new Salario('Francesco', 'Rossi', 32, '8473', 1988, 2006, 4, 2100),

new Salario('Vincenzo', 'Rossi', 56, '7093', 1988, 'Null', 4, 1900),

new Salario('Raffaele', 'Rossi', 22, '7353', 1988, 2002, 4, 1700)

];