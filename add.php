
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body bgcolor="#8FBC8F">
<form method="post" action="action_add.php">
   <table border="0" width="500">
      <tr>
         <td>Titulo</td>
         <td>:</td>
         <td><input type="text" name="title"></td>
      </tr>
      <tr>
         <td>Link imagen</td>
         <td>:</td>
         <td><input type="text" name="thumbnail"></td>
      </tr>
      <tr>
         <td>año</td>
         <td>:</td>
         <td><input type="text" name="year"></td>
      </tr>
      <tr>
         <td>Puntuacion</td>
         <td>:</td>
         <td><input type="text" name="rating"></td>
      </tr>
      <tr>
         <td><input type="submit" value="Guargar"></td>
      </tr>
   </table>
</form>

</body>
</html>