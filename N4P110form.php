<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));




$query = 'SELECT
        movie_name, movie_year, movie_director, movie_leadactor,
        movie_type
    FROM
        movie
    ORDER BY
        movie_name ASC,
        movie_year DESC';
$result = mysqli_query($db,$query) or die(mysqli_error($db));

$saber = $_GET['movie_id'];

echo <<<ENDHTML
<html>
 <head>
  <title>Rating</title>
 </head>
 <body>
  <form action="http://localhost:8080/ejer5/N4P111formprocess.php?movie_id=$saber" method="post">
   <table>
    <tr>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" /></td>
    </tr>
    <tr>
     <td>Date</td>
     <td><input type="date" name="date" /></td>
    </tr>
    <td>Rating</td>
     <td>
      <select name="juan">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
      </select>
     </td>
     <tr>
     <td>Comment:</td>
     <td><textarea type="text" name="comment" rows="5" cols="40"></textarea></td>
    </tr>
    </tr><tr>
    <td>
     <tr></tr>
     <td colspan="2" style="text-align: center">
      <input type="submit" name="submit" value="Submit" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
ENDHTML;
?>


