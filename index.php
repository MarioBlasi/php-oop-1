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
    <!-- place navbar here -->
  </header>
  <main class="container mt-5 shadow text-center">

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

    // Creazione degli oggetti Movie
    $movie1 = new Movie("Film 1", 2020, $genre1);
    $movie2 = new Movie("Film 2", 2018, $genre2);

    ?>

    <h2>Film 1:</h2>
    <p>Titolo: <?php echo $movie1->getTitle(); ?></p>
    <p>Anno: <?php echo $movie1->getYear(); ?></p>
    <p>Genere: <?php echo $movie1->getGenre()->getName(); ?></p>

    <h2>Film 2:</h2>
    <p>Titolo: <?php echo $movie2->getTitle(); ?></p>
    <p>Anno: <?php echo $movie2->getYear(); ?></p>
    <p>Genere: <?php echo $movie2->getGenre()->getName(); ?></p>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATK
