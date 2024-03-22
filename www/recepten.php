<?php
require "database.php";
$sql = "SELECT * FROM colombite";
$result = mysqli_query($conn, $sql);
$receptenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylerecepten.css">
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
    </header>
    <main>
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