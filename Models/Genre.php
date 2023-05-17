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

 // Creazione dell'array di generi
 $genres = [
    new Genre("Commedia"),
    new Genre("Azione"),
    new Genre("Fantasy"),
    new Genre("Horror"),
    new Genre("Sci-fi")
 ];
 ?>