<?php
    // dichiariamo l'array associativo
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- inseriamo una lista -->
    <ul>
        <!-- cicliamo l'array associativo con il ciclo foreach -->
        <?php foreach($posts as $date => $post) {?>
            <!-- inseriamo i list item che verra ciclato  -->
            <li>
                <!-- stampiamo le chiavi dell'array  -->
                <?php echo $date ?>
                <!-- inseriamo un altra lista che conterrà i post -->
                <ul>
                    <!-- cicliamo le chiavi dell'array associativo con il ciclo foreach -->
                    <?php foreach( $post as $newPosts) {?>

                        <li>
                            <!-- stampiamo i vari post delle singole date -->
                            <?php echo $newPosts['author'] ?> <br>
                            <?php echo $newPosts['title'] ?><br>
                            <?php echo $newPosts['text'] ?>

                        </li>

                    
                    
                    <?php } ?>
                </ul>
                
            </li>

            
                        
        <?php } ?>
    </ul>
    
</body>
</html>