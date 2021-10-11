<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
    <style>
        #Snack_Uno {margin-bottom: 50px;}
        #Snack_Due {margin-bottom: 50px;}
        #Snack_Tre {margin-bottom: 50px;}
        #Snack_Quattro {margin-bottom: 50px;}
    </style>
</head>
<body>
    
    <div class="container">

        <!-- SNACK 1  -->
        <div id="Snack_Uno">SNACK UNO <br>

            <?php

                // $random_number_home = rand(81, 127);
                // $random_number_visitors = rand(81, 127);

                $random_game = [
                    [
                        "home" => "Lakers",
                        "visitors" => "Nets",
                        "home_points" => $random_number_home,
                        "visitors_points" => $random_number_visitors
                    ],
                    [
                        "home" => "Heat",
                        "visitors" => "Hawks",
                        "home_points" => $random_number_home,
                        "visitors_points" => $random_number_visitors
                    ],
                    [
                        "home" => "Pistons",
                        "visitors" => "Spurs",
                        "home_points" => $random_number_home,
                        "visitors_points" => $random_number_visitors
                    ],
                    [
                        "home" => "Cleveland",
                        "visitors" => "Clippers",
                        "home_points" => $random_number_home,
                        "visitors_points" => $random_number_visitors
                    ],
                    [
                        "home" => "Detroit",
                        "visitors" => "Magic",
                        "home_points" => $random_number_home,
                        "visitors_points" => $random_number_visitors
                    ],
                ];

                $i = 0;

                while ($i < count($random_game)) {
                    // punti fatti generati randomicamente 
                    $random_game[$i]["home_points"] = rand(81, 127);
                    $random_game[$i]["visitors_points"] = rand(81, 127);

                    echo $random_game[$i]["home"] . " - " 
                    . $random_game[$i]["visitors"] 
                    . " || " . $random_game[$i]["home_points"] . " - " 
                    . $random_game[$i]["visitors_points"] . "<br>";

                    $i++;
                }


            ?>

        </div>
        <!-- / SNACK 1  -->

        <!-- SNACK 2  -->
        <div id="Snack_Due">SNACK DUE <br>

            <?php
                $name = $_GET["name"];
                $email = $_GET["email"];
                $age = $_GET["age"];

                $at = "@";
                $point = ".";
                
                echo $name . " || " . $email . " || " . $age . "<br>";

                if ((strlen($name) >= 3) && (strpos($email, $at) && strpos($email, $point)) && (is_numeric($age))) {
                    echo "Accesso riuscito";
                } else {
                    echo "Accesso negato";
                };   
            ?>

        </div>
        <!-- / SNACK 2  -->

        <!-- SNACK 3  -->
        <div id="Snack_Tre">SNACK TRE <br>

            <?php

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

                foreach ($posts as $key => $post) {
                    echo $key . " = DATA <br/>";
                    foreach ($post as $second_key => $data) {
                        echo $second_key . " =  POSIZIONE elemento <br/>";
                        foreach ($data as $element) {
                            echo $element . "<br/>";
                        }
                    }
                };

                // foreach ($posts as $post) {
                //     var_dump($post) . "<br/>";
                //     foreach ($post as $data) {
                //         var_dump($data) . "<br/>";
                //         foreach ($data as $element) {
                //             echo $element . "<br/>";
                //         }
                //     }
                // };
            ?>

        </div>
        <!-- / SNACK 3  -->

         <!-- SNACK 4  -->
         <div id="Snack_Quattro">SNACK QUATTRO <br>
         <!-- Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

            <?php

                // $array = [];
                // $random_number = rand(1, 100);

                // $i = 0;

                // while (count($array) < 15) {
                //     if (!in_array($random_number, $array)) {
                //         $array[] = $random_number;
                //     }
                // }

                // var_dump($array);
            
            ?>

        </div>
        <!-- / SNACK 4  -->

        <!-- SNACK 5  -->
        <div id="Snack_Quattro">SNACK CINQUE <br>
         
            <?php

                $paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Reprehenderit eveniet fugiat.
                Iusto perferendis vero, officiis in aperiam amet blanditiis autem quibusdam cum saepe quia totam illo. 
                Adipisci nulla dolorum";

                // print_r (explode(".", $paragrafo));

                $divisioni = explode(".", $paragrafo);

                foreach ($divisioni as $key => $divisione) {
                    echo $key . " " . $divisione . "<br/>";
                }

            ?>

        </div>
        <!-- / SNACK 5  -->

    </div>
</body>
</html>