<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

require 'Account.php';
require 'Holder.php';

$h1 = new Holder ("Doe", "John", "9/6/1975", "Lyon");
$a1 = new Account ('Compte courant', '2600', '€', $h1);

echo $a1 ;



?>


</body>
</html>