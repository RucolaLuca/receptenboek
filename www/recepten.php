<?php
require "database.php";
$sql = "SELECT * FROM colombite";
$result = mysqli_query($conn, $sql);
$receptenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>Receptenlijst</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
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
        <div class="recept_text">
            <h2>Hieronder vindt u alle lekkere gerechten!</h2>
        </div>
        <div class="recept_container">
            <?php foreach ($receptenboek as $recept) : ?>
                <div class="recept">
                    <a href="recept.php?id=<?php echo $recept["id"] ?>">
                        <img src="Images/<?php echo $recept["afbeelding"] ?>" alt="Recept Afbeelding">
                        <h2><?php echo $recept["naam"] ?></h2>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>