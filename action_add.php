

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  

</head>
<body bgcolor="#8FBC8F">
<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("film", [
   "title"     => $_POST['title'],
   "thumbnail" => $_POST['thumbnail'],
   "year"      => $_POST['year'],
   "rating"    => $_POST['rating']
]);

echo "data saved";
?>
<br>
<a href="index.php"><button>Volver</button></a>
</body>
</html>