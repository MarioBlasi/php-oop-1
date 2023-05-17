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

 // Creazione dell'array di film
 $movies = [
    new Movie("Film 1", 2020, $genres[0]),
    new Movie("Film 2", 2018, $genres[1]),
    new Movie("Film 3", 2008, $genres[2]),
    new Movie("Film 4", 2088, $genres[3]),
    new Movie("Film 5", 2118, $genres[4])
 ];
 ?>