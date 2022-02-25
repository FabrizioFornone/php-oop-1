<?php

/*
 create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

*/


class Movie
{
   public $title;
   public $filmDirector;
   public $genres;
   public $year;
   public $poster;

   function __construct($_title, $_filmDirector, array $_genres, $_year, $_poster)
   {
      $this->title = $_title;
      $this->filmDirector = $_filmDirector;
      $this->genres = $_genres;
      $this->year = $_year;
      $this->poster = $_poster;
   }

   function htmlTemplate($instance)
   {
      echo "<h4> Title: $instance->title </h4>";
      echo "<h4> Film Director: $instance->filmDirector </h4>";
      echo "<h5> Genres:&nbsp;";
      foreach ($instance->genres as $value) {
         echo "<span class='px-1'>$value</span>";
      }
      echo "</h5>";
      echo "<h5> Year: $instance->year </h4>";
      echo "<img src='$instance->poster' alt=''>";
   }
}

$spiritedAway = new Movie("Spirited Away", "Hayao Miyazaki", ["animation", "supernatural", "fantasy"], "2001", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/3PV6lq9BNmoyyDXr5tdNeeESEMn.jpg");
$goodFellas = new Movie("Goodfellas", "Martin Scorzese", ["dramatic", "crime", "gangster"], "1990", "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7Ce724ZcEt7Id9EwBFFdXuvDxWA.jpg");


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css">
   <title>php-oop-1 Fabrizio Fornone</title>
</head>

<body>
   <header>
      <div class="container-fluid">
         <div class="container d-flex justify-content-between align-items-center">
            <h2 class="text-uppercase">php oop</h1>
               <div>
                  <img src="./img/oop_logo.svg" alt="">
               </div>
         </div>
      </div>
   </header>
   <main>
      <div class="container my-5 mx-auto">
         <div class="row justify-content-center text-center">
            <div class="col-5">
               <div class="p-2 movie border rounded">
                  <?php
                  $spiritedAway->htmlTemplate($spiritedAway);
                  ?>
               </div>
            </div>
            <div class="col-5">
               <div class="p-2 movie border rounded">
                  <?php
                  $goodFellas->htmlTemplate($goodFellas);
                  ?>
               </div>
            </div>
         </div>
      </div>
   </main>

</body>

</html>