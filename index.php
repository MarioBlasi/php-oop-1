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

</head>

<body>
  <header>
    <div class="container">
        <h1 class=" text-danger shadow mt-3 text-center ">
            PHP OOP!
        </h1>
    </div>
  </header>
  <main class="container mt-4 shadow text-center">

    <?php

    class Genre {
       public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    class Movie {
       public $title;
       public $year;
       public $genre;

        public function __construct(string $title, string $year, Genre $genre) {
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }

        public function getGenre() {
            return $this->genre;
        }


    }

    // Creazione degli oggetti Genre
    $genre1 = new Genre("Commedia");
    $genre2 = new Genre("Azione");
    $genre3 = new Genre("Fantasy");
    $genre4 = new Genre("Horror");
    $genre5 = new Genre("Sci-fi");

    // Creazione degli oggetti Movie
    $movie1 = new Movie("Film 1", 2020, $genre1);
    $movie2 = new Movie("Film 2", 2018, $genre2);
    $movie3 = new Movie("Film 3", 2008, $genre3);
    $movie4 = new Movie("Film 4", 2088, $genre4);
    $movie5 = new Movie("Film 5", 2118, $genre5);

    ?>
    <div class="shadow">
        <h4 class="bg-info">Film 1:</h4>
        <p>Titolo: <?php echo $movie1->getTitle(); ?></p>
        <p>Anno: <?php echo $movie1->getYear(); ?></p>
        <p>Genere: <?php echo $movie1->getGenre()->getName(); ?></p>
    </div>
    <div class="shadow">
        <h4 class="bg-info">Film 2:</h4>
        <p>Titolo: <?php echo $movie2->getTitle(); ?></p>
        <p>Anno: <?php echo $movie2->getYear(); ?></p>
        <p>Genere: <?php echo $movie2->getGenre()->getName(); ?></p>
    </div>
    <div class="shadow">
        <h4 class="bg-info">Film 3:</h4>
        <p>Titolo: <?php echo $movie3->getTitle(); ?></p>
        <p>Anno: <?php echo $movie3->getYear(); ?></p>
        <p>Genere: <?php echo $movie3->getGenre()->getName(); ?></p>
    </div>
    <div class="shadow">
        <h4 class="bg-info">Film 4:</h4>
        <p>Titolo: <?php echo $movie4->getTitle(); ?></p>
        <p>Anno: <?php echo $movie4->getYear(); ?></p>
        <p>Genere: <?php echo $movie4->getGenre()->getName(); ?></p>
    </div>
    <div class="shadow">
        <h4 class="bg-info">Film 5:</h4>
        <p>Titolo: <?php echo $movie5->getTitle(); ?></p>
        <p>Anno: <?php echo $movie5->getYear(); ?></p>
        <p>Genere: <?php echo $movie5->getGenre()->getName(); ?></p>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATK
