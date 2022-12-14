<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#8FBC8F">
    <h1 align="center">.crud de prueba sobre peliculas.</h1>



    <?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>

<a href="add.php"><button>AÑADIR DATOS</button></a><br><br>
<table border="1" width="500" bgcolor="#dddddd" align="Center">
   <tr align="center" bgcolor="#dddddd";>
      <td>Imagen</td>
      <td>Titulo</td>
      <td>Año</td>
      <td>clasificación</td>
      <td colspan="2">Acciones</td>
   </tr>
   <?php
   $data = $db->retrieve("film");
   $data = json_decode($data, 1);
   
   if(is_array($data)){
      foreach($data as $id => $film){
         echo "<tr>
         <td><img src='{$film['thumbnail']}'></td>
         <td>{$film['title']}</td>
         <td>{$film['year']}</td>
         <td>{$film['rating']}</td>
         <td><a href='edit.php?id=$id'>EDITAR</a></td>
         <td><a href='delete.php?id=$id'>ELIMINAR</a></td>
      </tr>";
      }
   }
   ?>
</table>




</body>
</html>