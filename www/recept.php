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
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="recepten.php">Recipes</a></li>
                <li><a href="https://github.com/RucolaLuca">About Me</a></li>
                <li><a href="specials.php">Specials</a></li>
            </ul>
        </nav>
        <h1 class="recepten_title">Colombite</h1>
        <div class="recipe_count">
            Totaal Recepten:<?php echo $totaal_recepten; ?>
        </div>
    </header>
    <main>
        <div class="detail_recept">
            <img src="images/<?php echo $recept["afbeelding"] ?>" alt="Niet Gelukt" class="detail_image">
            <h1><b><?php echo $recept["naam"] ?></b></h1>
            <h2><b>Aantal Ingrediënten: <?php echo $recept["aantal_ingredienten"] ?></b></h2>
            <h2><b>Menugang: <?php echo $recept["menugang"] ?></b></h2>
            <h2><b>Bereidingstijd: <?php echo $recept["duur"] ?> min</b></h2>
        </div>
    </main>
    <footer>
        eee
    </footer>
</body>

</html>