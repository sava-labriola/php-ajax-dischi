<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/app.css">
        <title>Ajax Api Musica</title>
    </head>
    <body>
        <div class="container">

        </div>
        <script id="song" type="text/x-handlebars-template">
            <div class="card">
                <div class="poster">
                    <img src="{{image}}" alt="">
                </div>
                <div class="title">
                    <h1>{{title}}</h1>
                </div>
                <div class="author">
                    <h2>{{author}}</h2>
                </div>
                <div class="genre">
                    <h3>{{genre}}</h3>
                </div>
                <div class="year">
                    <h3>{{year}}</h3>
                </div>
            </div>
        </script>
        <script src="public/app.js" charset="utf-8"></script>
    </body>
</html>
