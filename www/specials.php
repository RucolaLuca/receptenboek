<?php
require "database.php";
$sql = "SELECT * FROM colombite";
$result = mysqli_query($conn, $sql);
$receptenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);
//Query 1, overzicht van bereidingstijden
$sql_bereidingstijd = "SELECT naam, duur FROM colombite ORDER BY duur ASC";
$result_bereidingstijd = mysqli_query($conn, $sql_bereidingstijd);
$bereidingstijd = mysqli_fetch_all($result_bereidingstijd, MYSQLI_ASSOC);
//Query 2, overzicht van aantal ingrediënten
$sql_a_ingredienten = "SELECT naam, aantal_ingredienten FROM colombite ORDER BY aantal_ingredienten ASC";
$result_a_ingredienten = mysqli_query($conn, $sql_a_ingredienten);
$a_ingredienten = mysqli_fetch_all($result_a_ingredienten, MYSQLI_ASSOC);
//Query 3, overzicht van gemiddelde aantal ingrediënten.
$sql_gem_ingredienten = "SELECT ROUND(AVG(aantal_ingredienten)) AS gemiddelde_aantal_ingredienten FROM colombite";
$result_gem_ingredienten = mysqli_query($conn, $sql_gem_ingredienten);
$gem_ingredienten = mysqli_fetch_assoc($result_gem_ingredienten);
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
    <link rel="stylesheet" href="css/stylespecials.css">
    <link rel="icon" href="Images/Colombia_land_flag.png">
    <title>Specials Pagina</title>
</head>

<body>
    <?php require "header.php" ?>
    <main>
        <div class="specials_container">
            <div class="left">
                <h2>Bereidingstijd</h2>
                <ol>
                    <?php foreach ($bereidingstijd as $tijd) : ?>
                        <li class="special_time">
                            <?php echo $tijd['naam']; ?> - <?php echo $tijd['duur']; ?> minuten
                        </li>
                    <?php endforeach ?>
                </ol>
            </div>
            <div class="middle">
                <h2>Aantal Ingredienten</h2>
                <ol>
                    <?php foreach ($a_ingredienten as $a_ingredient) : ?>
                        <li class="special_a_ingredient">
                            <?php echo $a_ingredient["naam"]; ?> - <?php echo $a_ingredient["aantal_ingredienten"]; ?>
                        </li>
                    <?php endforeach ?>
                </ol>
            </div>
            <div class="right">
                <h2>Gemiddelde Aantal Ingredienten</h2>
                <ul>
                    <?php foreach ($gem_ingredienten as $gem_ingredient) : ?>
                        <li class="special_gem_ingredient">
                            <?php echo $gem_ingredient; ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </main>
    <?php require "footer.php" ?>
</body>

</html>