<?php
require_once __DIR__ .'/classes/Movie.php';

// $movie_1 = new Movie("Universal Pictures"," Back to the Future"," Michael J. Fox "," Christopher lloyd"," USA"," 1985"," Robert Zemeckis"," Robert Zemeckis");

// $movie_2 = new Movie("Universal Pictures"," Back to the Future II"," Michael J. Fox "," Christopher lloyd"," USA"," 1989"," Bob Gale"," Robert Zemeckis/Bob Gale");

// $movie_3 = new Movie("Universal Pictures"," Back to the Future III"," Michael J. Fox "," Christopher lloyd"," USA"," 1990"," Robert Zemeckis"," Bob Gale");

// var_dump($movie_1,$movie_2,$movie_3);

//ANZICHÉ DEFINIRLI INDIVIDUALMENTE,COME FATTO SOPRA, LI SPRIGIONIAMO COME UN ARRAY

$movie =[
    new Movie("Universal Pictures"," Back to the Future"," Michael J. Fox "," Christopher lloyd"," USA"," 1985"," Robert Zemeckis"," Robert Zemeckis"),
    new Movie("Universal Pictures"," Back to the Future II"," Michael J. Fox "," Christopher lloyd"," USA"," 1989"," Bob Gale"," Robert Zemeckis/Bob Gale"),
    new Movie("Universal Pictures"," Back to the Future III"," Michael J. Fox "," Christopher lloyd"," USA"," 1990"," Robert Zemeckis"," Bob Gale")
];

?>