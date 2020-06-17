<?php

$dischi = [
    [
        'poster' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'genre' => 'Rock',
        'year' => '1988'
    ],
    [
        'poster' => 'https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg',
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'genre' => 'Pop',
        'year' => '1992'
    ],
    [
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'genre' => 'Pop',
        'year' => '1993'
    ],
    [
        'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
        'title' => 'Steve Gadd Band',
        'author' => 'Steve Gadd Band',
        'genre' => 'Jazz',
        'year' => '2018'
    ],
    [
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'genre' => 'Metal',
        'year' => '2000'
    ],
    [
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
        'title' => 'One more car, one more raider',
        'author' => 'Eric Clapton',
        'genre' => 'Rock',
        'year' => '2002'
    ],
    [
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'genre' => 'Rock',
        'year' => '1972'
    ],
    [
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
        'title' => 'And Justice for All',
        'author' => 'Metallica',
        'genre' => 'Metal',
        'year' => '1988'
    ],
    [
        'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
        'title' => 'Hard Wired',
        'author' => 'Dave Weckl',
        'genre' => 'Jazz',
        'year' => '1994'
    ],
    [
        'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
        'title' => 'Bad',
        'author' => 'Michael Jacjson',
        'genre' => 'Pop',
        'year' => '1987'
    ]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/app.css">
        <title>Ajax Api Musica</title>
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
