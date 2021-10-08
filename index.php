<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    
    <!-- SNACK 1  -->
    <div id="Snack Uno">

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
    <div id="Snack Due">

        <?php
            $name = $_GET["name"];
            $email = $_GET["email"];
            $age = $_GET["age"];

            $at = "@";
            $point = ".";
            
            echo $name . " || " . $email . " || " . $age;

            if ((strlen($name) > 3) && (strpos($email, $at) && strpos($email, $point)) && (is_numeric($age))) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            };
            
        ?>

    </div>
    <!-- / SNACK 2  -->

</body>
</html>