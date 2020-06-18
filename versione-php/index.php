<?php

include 'partials/database.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/app.css">
        <title>Php-dischi</title>
    </head>
    <body>
        <div class="container">
            <?php
            foreach ($dischi as $disco) {
            ?>
            <div class="card">
                <div class="poster">
                    <img src="<?php echo $disco['poster'] ?>" alt="">
                </div>
                <div class="title">
                    <h1><?php echo $disco['title'] ?></h1>
                </div>
                <div class="author">
                    <h2><?php echo $disco['author'] ?></h2>
                </div>
                <div class="genre">
                    <h3><?php echo $disco['genre'] ?></h3>
                </div>
                <div class="year">
                    <h3><?php echo $disco['year'] ?></h3>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </body>
</html>
