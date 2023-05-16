<?php

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

 // Creazione degli oggetti Movie
 $movie1 = new Movie("Film 1", 2020, $genre1);
 $movie2 = new Movie("Film 2", 2018, $genre2);
 $movie3 = new Movie("Film 3", 2008, $genre3);
 $movie4 = new Movie("Film 4", 2088, $genre4);
 $movie5 = new Movie("Film 5", 2118, $genre5);

 ?>