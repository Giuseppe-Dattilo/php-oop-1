<?php

include_once __DIR__ . '/models/movie.php';

$movie1 = new Movie('Arancia meccanica','Stanley Kubrick','1971','Walter Carlos, AA.VV.');
// var_dump($movie1->getInfo());


$movie2 = new Movie('Ritorno al futuro','Robert Zemeckis','1985','Alan Silvestri');
// var_dump($movie2->getInfo());

$movie3 = new Movie('Il buono, il brutto, il cattivo','Sergio Leone','1966','Ennio Morricone');
// var_dump($movie3->getInfo());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>

     <!-- Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <!-- Movies -->
    <section id="movies" class="container">
        <div class="text-center pt-5 px-5">
            <h1 class="fw-bold p2-3">Movies</h1>
            <h2 class="bg-success text-white rounded-2 mt-5"><?= $movie1->title ?></h2>
            <ul class="list-group mx-auto">
                <li class="list-group-item border border-success ">un film di <strong><?= $movie1->director ?></strong></li>
                <li class="list-group-item border border-success ">del <?= $movie1->year ?></li>
                <li class="list-group-item border border-success ">musiche di <strong><?= $movie1->music ?></strong></li>
            </ul>
            <h2 class="bg-success text-white rounded-2 mt-5"><?= $movie2->title ?></h2>
            <ul class="list-group mx-auto">
                <li class="list-group-item border border-success">un film di <strong><?= $movie2->director ?></strong></li>
                <li class="list-group-item border border-success">del <?= $movie2->year ?></li>
                <li class="list-group-item border border-success">musiche di <strong><?= $movie2->music ?></strong></li>
            </ul>
            <h2 class="bg-success text-white rounded-2 mt-5"><?= $movie3->title ?></h2>
            <ul class="list-group mx-auto">
                <li class="list-group-item border border-success">un film di <strong><?= $movie3->director ?></strong></li>
                <li class="list-group-item border border-success">del <?= $movie3->year ?></li>
                <li class="list-group-item border border-success">musiche di <strong><?= $movie3->music ?></strong></li>
            </ul>
        </div>
    </section>
  
    
</body>
</html>