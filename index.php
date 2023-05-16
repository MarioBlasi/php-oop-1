<?php

require __DIR__ . './Models/Genre.php';

require __DIR__ . './Models/Movie.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>php-oop-1</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="container">
        <h1 class=" text-danger shadow mt-3 text-center ">
            Movie List
        </h1>
    </div>
  </header>
  <main class="container mt-5 shadow text-center">
    <div class="shadow mt-3">
        <h4 class="">Film 1:</h4>
        <hr>
        <div class="color">
            <p>Titolo: <?php echo $movie1->getTitle(); ?></p>
            <p>Anno: <?php echo $movie1->getYear(); ?></p>
            <p>Genere: <?php echo $movie1->getGenre()->getName(); ?></p>
        </div>
    </div>
    <div class="shadow">
        <hr>
        <h4 class="">Film 2:</h4>
        <hr>
        <div class="color">
            <p>Titolo: <?php echo $movie2->getTitle(); ?></p>
            <p>Anno: <?php echo $movie2->getYear(); ?></p>
            <p>Genere: <?php echo $movie2->getGenre()->getName(); ?></p>
        </div>
    </div>
    <div class="shadow">
        <hr>
        <h4 class="">Film 3:</h4>
        <hr>
        <div class="color">
            <p>Titolo: <?php echo $movie3->getTitle(); ?></p>
            <p>Anno: <?php echo $movie3->getYear(); ?></p>
            <p>Genere: <?php echo $movie3->getGenre()->getName(); ?></p>
        </div>
    </div>
    <div class="shadow">
        <hr>
        <h4 class="">Film 4:</h4>
        <hr>
        <div class="color">
            <p>Titolo: <?php echo $movie4->getTitle(); ?></p>
            <p>Anno: <?php echo $movie4->getYear(); ?></p>
            <p>Genere: <?php echo $movie4->getGenre()->getName(); ?></p>
        </div>
    </div>
    <div class="shadow">
        <hr>
        <h4 class="">Film 5:</h4>
        <hr>
        <div class="color">
            <p>Titolo: <?php echo $movie5->getTitle(); ?></p>
            <p>Anno: <?php echo $movie5->getYear(); ?></p>
            <p>Genere: <?php echo $movie5->getGenre()->getName(); ?></p>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATK
