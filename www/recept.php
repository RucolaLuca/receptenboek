<?php
$id = $_GET["id"];
$sql = "SELECT * from colombite WHERE id = $id";
require "database.php";
$result = mysqli_query($conn, $sql);
$recept = mysqli_fetch_assoc($result);
// Query voor aantal gerechten in database
$sql_count = "SELECT COUNT(*) AS totaal_recepten FROM colombite";
$result_count = mysqli_query($conn, $sql_count);
$aantal_recepten_row = mysqli_fetch_assoc($result_count);
$totaal_recepten = $aantal_recepten_row['totaal_recepten'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylerecepten.css">
    <link rel="icon" href="Images/Colombia_land_flag.png">
    <title>Detail Recepten</title>
</head>

<body>
    <?php require "header.php" ?>
    <main>
        <div class="detail_recept">
            <img src="images/<?php echo $recept["afbeelding"] ?>" alt="Niet Gelukt" class="detail_image">
            <h1><b><?php echo $recept["naam"] ?></b></h1>
            <h2><b>Aantal Ingrediënten: <?php echo $recept["aantal_ingredienten"] ?></b></h2>
            <h2><b>Menugang: <?php echo $recept["menugang"] ?></b></h2>
            <h2><b>Bereidingstijd: <?php echo $recept["duur"] ?> min</b></h2>
        </div>
    </main>
    <?php require "footer.php" ?>
</body>

</html>