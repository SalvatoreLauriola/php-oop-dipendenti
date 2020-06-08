<?php
include_once __DIR__ . '/classes/Salario.php';
include_once __DIR__ . '/classes/Salario.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Lavoratori</h2>
    <ul>
        <?php
        foreach ($dipendenti as $person) { ?>
        <li>
            <h2>Nome : <?php echo $person -> name; ?></h2>
            <h2>Cognome : <?php echo $person -> surname; ?></h2>
            <h2>Anni : <?php echo $person -> age; ?></h2>
            <h2>Matricola : <?php echo $person -> IdDipendente; ?></h2>
            <h2>Anno Assunzione : <?php echo $person -> AnnoAssunzione; ?></h2>
            <h2>Anno Licenziamento : <?php echo $person -> AnnoLicenziamento; ?></h2>
            <h2>Numero Familiari : <?php echo $person -> NumFamiliari; ?></h2>
            <h2>Stipendio Lordo : <?php echo $person -> StipLordo; ?></h2>
        </li>
        <?php } ?>
    </ul>
    
</body>
</html>