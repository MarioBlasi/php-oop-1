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

 // Creazione degli oggetti Genre
 $genre1 = new Genre("Commedia");
 $genre2 = new Genre("Azione");
 $genre3 = new Genre("Fantasy");
 $genre4 = new Genre("Horror");
 $genre5 = new Genre("Sci-fi");

 ?>