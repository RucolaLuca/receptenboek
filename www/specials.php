<?php
$id = $_GET["id"];
$sql = "SELECT * from colombite WHERE id = $id";
require "database.php";
$result = mysqli_query($conn, $sql);
$recept = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>