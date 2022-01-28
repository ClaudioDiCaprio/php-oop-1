<?php
require_once __DIR__ .'/classes/Movie.php';

// $movie_1 = new Movie("Universal Pictures"," Back to the Future"," Michael J. Fox "," Christopher lloyd"," USA"," 1985"," Robert Zemeckis"," Robert Zemeckis");

// $movie_2 = new Movie("Universal Pictures"," Back to the Future II"," Michael J. Fox "," Christopher lloyd"," USA"," 1989"," Bob Gale"," Robert Zemeckis/Bob Gale");

// $movie_3 = new Movie("Universal Pictures"," Back to the Future III"," Michael J. Fox "," Christopher lloyd"," USA"," 1990"," Robert Zemeckis"," Bob Gale");

// var_dump($movie_1,$movie_2,$movie_3);

//ANZICHÉ DEFINIRLI INDIVIDUALMENTE,COME FATTO SOPRA, LI SPRIGIONIAMO COME UN ARRAY

$movie =[
    new Movie("Universal Pictures"," Back to the Future","Michael J. Fox"," Christopher lloyd"," USA"," 1985"," Robert Zemeckis"," Robert Zemeckis"),
    new Movie("Universal Pictures"," Back to the Future II"," Michael J. Fox "," Christopher lloyd"," USA"," 1989"," Bob Gale"," Robert Zemeckis/Bob Gale"),
    new Movie("Universal Pictures"," Back to the Future III"," Michael J. Fox "," Christopher lloyd"," USA"," 1990"," Robert Zemeckis"," Bob Gale")
];

// var_dump($movie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>Back to the future's revival</h1>
    <?php foreach($movie as $mov_ie){?>
        <div>
            <h3><?php echo "-{$mov_ie->originalTitle}-" ?></h3>
            <ul>
                <li><?php  echo "Main Actor:{$mov_ie->getNome()}, Second Actor:{$mov_ie->secondChar}." ?></li>
                <li><?php echo "{$mov_ie->production},{$mov_ie->productionCountry},{$mov_ie->poductionYear} ." ?></li>
                <li><?php echo"Director:{$mov_ie->movieDirector}, Script: {$mov_ie->script} ." ?></li>
            </ul>
        </div> 
    <?php } ?>
</body>
</html>

