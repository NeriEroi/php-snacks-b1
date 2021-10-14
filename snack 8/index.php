<?php

include __DIR__ . "/database/database.php";

$filtered_ads = [];

foreach ($ads as $ad) {
    if ($ad["is_active"] === true) {
        $filtered_ads[] = $ad;
    }
}

$currentAds = $filtered_ads[rand(0, count($filtered_ads) - 1)];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">

    <h1>
        ADVERTISING
    </h1>

    <div class="img_cont">

        <img src="<?php echo $currentAds["image_path"] ?>" alt="">

    </div>

</div>

</body>
</html>