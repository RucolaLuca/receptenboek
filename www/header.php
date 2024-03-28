<?php
require "database.php";
// Query voor aantal gerechten in database
$sql_count = "SELECT COUNT(*) AS totaal_recepten FROM colombite";
$result_count = mysqli_query($conn, $sql_count);
$aantal_recepten_row = mysqli_fetch_assoc($result_count);
$totaal_recepten = $aantal_recepten_row['totaal_recepten'];
session_start();
?>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="recepten.php">Recipes</a></li>
            <li><a href="specials.php">Specials</a></li>
            <li><a href="https://github.com/RucolaLuca">About Me</a></li>
        </ul>
    </nav>
    <h1 class="recepten_title">Colombite</h1>
    <div class="recipe_count">
        Totaal Recepten: <?php echo $totaal_recepten; ?>
    </div>
</header>