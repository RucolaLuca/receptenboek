<?php
require "database.php";
//Query 1, overzicht van bereidingstijden
$sql_bereidingstijd = "SELECT duur FROM colombite ORDER BY duur ASC";
$result_bereidingstijd = mysqli_query($conn, $sql_bereidingstijd);
$bereidingstijd = mysqli_fetch_all($result_bereidingstijd, MYSQLI_ASSOC);
//Query 2, overzicht van aantal ingrediënten
$sql_a_ingredienten = "SELECT aantal_ingredienten FROM colombite ORDER BY aantal_ingredienten ASC";
$result_a_ingredienten = mysqli_query($conn, $sql_a_ingredienten);
$a_ingredienten = mysqli_fetch_all($result_a_ingredienten, MYSQLI_ASSOC);
//Query 3, overzicht van gemiddelde aantal ingrediënten.
$sql_gem_ingredienten = "SELECT ROUND(AVG(aantal_ingredienten)) FROM colombite";
$result_gem_ingredienten = mysqli_query($conn, $sql_gem_ingredienten);
$gem_ingredienten = mysqli_fetch_all($result_gem_ingredienten, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylerecepten.css">
    <link rel="icon" href="Images/Colombia_land_flag.png">
    <title>Specials Pagina</title>
</head>
<body>

</body>
</html>