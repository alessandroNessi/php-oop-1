<?php 
    function printMovie($movie){
        echo "
        <h2>{$movie->getName()}</h2>
        <p>{$movie->getDate()}</p>
        <p>{$movie->getDirector()}</p>
        <ul>";
        $temp = $movie->getGenres();
        foreach($temp as $genre){
            echo "<li>{$genre}</li>";
        };
        echo "</ul>
        <p>{$movie->getDescription()}</p>
        ";
    }
    require __DIR__.('/movie.php');
    $movie1= new Movie('La notte dei morti morenti','01/01/2001','Cippa Lippa',['horror','grottesco','comico'],'i morti muoiono e rimangono tali, fine. loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem');
    $movie2= new Movie('Fettina panata','01/01/1990','Cristina d\'avena', ['fettina','panata','drammatico','esoterismo'],'in questo avvincente film mirko dovrà vedersela in una lotta all\'ultimo sangue contro le fettine panate evocate da cristina che stanno devastando il mondo sotto il comando del perfido gatto giuliano')
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
        <?php echo printMovie($movie2); ?>
    </div>
</body>
</html>