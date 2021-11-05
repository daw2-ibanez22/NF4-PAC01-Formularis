<html>
 <head>
  <title>Greetings Earthling</title>
 </head>
 <body>
<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));



echo '<h1>Se llama:' . $_POST['name'] . '<br> La fecha es del dia:'. $_POST['date'].'<br> Tiene un movie rating de :'. $_POST['juan'] . '/5'.' <br> El Comentario es: '. $_POST['comment'].'</h1>';
$name = $_POST['name'];
$date = $_POST['date'];
$comment = $_POST['comment'];
$greeting = $_POST['juan'];
$juanjo = $_GET['movie_id'];

 $query = <<<ENDSQL
        INSERT INTO reviews
        (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
        VALUES
        ($juanjo,"$date","$name","$comment","$greeting")
ENDSQL;
        mysqli_query($db,$query) or die(mysqli_error($db));
        echo "<br>";
        echo 'Comentario creado';

?>
 </body>
</html>