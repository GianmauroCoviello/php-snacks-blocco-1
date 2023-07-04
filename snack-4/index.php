<?php

    // dichiariamo l'array che conterrà i 15 numeri
    $arrayRandomNumbers= [];

    //inseriamo un ciclo while che restituirà 15 numeri
    while (count($arrayRandomNumbers) < 15) {
        # code...
        // dichiariamo un variabile che restituirà un numero da 1 a 100 tramite la proprietà rand(min,max)
        $randomNumber= rand(1,100);

        // inseriamo una condizione che ci fara un controllo sulla presenza dei numeri random nell' arry, quindu se i numeri sono presenti all' interno dell' array allora il valore sara true e verranno visualizzati altrimenti il valore sara false
        if (!in_array($randomNumber, $arrayRandomNumbers)) {

            // inseriamo all'interno dell'array la variabile che contiene il numero random
            $arrayRandomNumbers [] = $randomNumber;

            
        };
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php var_dump($arrayRandomNumbers)  ?>
    </div>
    
</body>
</html>