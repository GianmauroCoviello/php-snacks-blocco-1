<?php

    // inseriamo tutte le variabili in GET facendo riferimento agli input della form in isset che avrà il compito di controllare se le variabili sono presenti o se hanno un valore Null
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
        // dichiarazione variabili
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        $results = true;

        
        

    
        // inseriamo le diverse condizioni che la form dovra essere sottoposta
        if ((strlen($name) > 3) && strpos($email, '@') && strpos($email, '.') && is_numeric($age) ) {
            // se le condizioni sono tutte verificate allora results avrà il seguente valore 
            $results = 'Accesso consentito';
            
        }
        else{
            // altrimenti
            $results= ' Accesso negato';
            

        }

        
        
    
    
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
    <!-- inseriamo il form -->
    <form action="index.php" method="GET">
        <input type="text" name="name" placeholder="inserisci nome"><br>
        <input type="text" name="email" placeholder="inserisci email"><br>
        <input type="text" name="age" placeholder="inserisci la tua età"><br>
        <button>INVIA DATI</button>
    </form>
    <h3>
        
        <?php
            // chiamata della variabile condizionale
            echo $results;
               
        ?>
    </h3>
    

</body>
</html>