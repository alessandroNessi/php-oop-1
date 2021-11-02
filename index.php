<?php 
    function printMovie($movie){
        echo("
        <h2>{$movie->getName()}</h2>
        <p>{$movie->getDate()}</p>
        <p>{$movie->getDirector()}</p>
        <p>{$movie->getGenres()}</p>
        <p>{$movie->getDescription()}</p>
        ");
    }
    require __DIR__.('/movie.php');
    $movie1=new Movie('La notte dei morti morenti','01/01/2001','Cippa Lippa',['horror','grottesco','comico'],'i morti muoiono e rimangono tali, fine. loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo printMovie($movie1); ?>
    </div>
</body>
</html>