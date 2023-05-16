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


 ?>