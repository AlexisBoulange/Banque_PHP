<?php

require 'Account.php';
require 'Holder.php';

//Holders

$h1 = new Holder ("Doe", "John", "09-06-1975", "Lyon");
$h2 = new Holder ("Darc", "Jeanne", "10-08-1986", "Paris");

//Accounts


$a1 = new Account ('Compte courant', '2600', '€', $h1);
$a2 = new Account ('Livret A', '50', '€', $h1);
$a3 = new Account ('Compte courant', '1300', '€', $h2);

echo $h1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>VILLE</th>
            <th>SOLDE (COMPTE)</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</body>
</html>