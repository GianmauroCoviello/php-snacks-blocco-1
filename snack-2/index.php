<?php

    
    // $nome= $_GET['nome'];
    
    
    // $email= $_GET['email'];
    
    // $età= $_GET['età'];

    // echo $nome." ".$email." ".$età;
    // if ( is_numeric($età)) {
    //     echo 'accesso consetito';
    // } else {
    //     echo 'accesso negato';
    // }

    // if ( strlen($nome)>= 3) {
    //     echo 'accesso consetito';
    // } else {
    //     echo 'accesso negato';
    // }

    // if (strpos($email, '@') && strpos($email, '.')) {
    //     echo 'accesso consetito';
    // } else {
    //     echo 'accesso negato';
    // }
    


    // if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
    //     $name = $_GET['name'];
    //     $email = $_GET['email'];
    //     $age = $_GET['age'];

    
    
    //     if ((strlen($name) > 3) && strpos($email, '@') && strpos($email, '.') && is_numeric($age) ) {

    //         echo 'Accesso consentito';

    //     }
    //     else{
    //         echo 'accesso negato';
    //     }
    
    
    // }

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
        
            if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
                $name = $_GET['name'];
                $email = $_GET['email'];
                $age = $_GET['age'];
        
            
            
                if ((strlen($name) > 3) && strpos($email, '@') && strpos($email, '.') && is_numeric($age) ) {
        
                    echo 'Accesso consentito';
        
                }
                else{
                    echo 'accesso negato';
                }
            
            
            }
    
        
        ?>
    </h3>
    

</body>
</html>