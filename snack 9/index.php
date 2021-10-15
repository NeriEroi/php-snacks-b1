<?php

    require __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php foreach ($hotels as $hotel) { ?>

        <?php foreach ($hotel as $data) { ?>

            
            <div class="item">

                <h3>
                    <?php echo $data ?>
                </h3>

            </div>    
            
        <?php } ?>

    <?php } ?>

</body>
</html>