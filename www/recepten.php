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
    <link rel="stylesheet" href="style.css">
    <title>Receptenlijst</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="https://github.com/RucolaLuca">About Me</a></li>
            </ul>
        </nav>
        <h1 class="recepten_title">Colombite</h1>
    </header>
    <main>
        <div class="div">
            <div class="recept">
                <?php foreach ($receptenboek as $recept) : ?>
                    <tr>
                        <td>
                            <a href="recept.php?id=<?php echo $recept["id"] ?>">
                                <img src="Images/<?php echo $recept["afbeelding"] ?>" alt="Recept Afbeelding" width="22%" height="auto">
                            </a>
                        </td>
                        <td><?php echo $recept["naam"] ?></td>
                    </tr>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>