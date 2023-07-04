<?php
// creazione array associativi con la specifica sintassi chiave => valore
$arrayGameBasket = [
    [
        'squad' => 'Olimpia milano - Virtus Bologna',
        'score' => '89 - 76'

    ],
    [
        'squad' => 'Tortona - Basket Napoli',
        'score' => '89 - 76'



    ],
    [
        'squad' => 'Venezia - Sassari',
        'score' => '89 - 76'


    ],
    [
        'squad' => 'Monza - Varese',
        'score' => '89 - 76'


    ],
    [
        'squad' => 'Brindisi - Sassuolo',
        'score' => '89 - 76'


    ]
];

?>

<!-- inserimento dell'html nel file php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>GIRONE QUALIFICAZIONI EUROLEGA</h1>
    <!-- inserialo la lista che coterrà le partite -->
    <ul>
        <!-- cicliamo l'array associativo con il ciclo foreach -->
        <?php foreach ($arrayGameBasket as $game) { ?>
            <!-- inseriamo i list item che verra ciclato  -->
            <li>
                <!-- stampiamo le chiavi dell'array  -->
                <?php echo $game['squad'] . " | " . $game['score'] ?>

            </li>

        <?php } ?>
    </ul>
</body>

</html>