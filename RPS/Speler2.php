<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Steen, papier, schaar</title>
</head>

<body>
    <h1>Steen, papier, schaar</h1>

    <h3>Speler 1 heeft zijn keuze gemaakt </h3>
    <?php


    $_SESSION["Speler1"] = $_POST['choices'];
    ?>

    <h3>Speler 2 </h3>
    <form action="uitslag.php" method="GET">
        <button type="submit" method="post" name="Speler2"   value="Steen">
            <img src="img/Steen.png" alt="buttonpng" id="choice" name="Speler2" value="Steen" />
        </button>
        <button type="submit" method="post" name="Speler2"   value="Schaar">
            <img src="img/schaar.png" alt="buttonpng" id="choice" name="Speler2" value="Schaar" />
        </button>
        <button type="submit" method="post" name="Speler2"   value="Papier">
            <img src="img/papier.png" alt="buttonpng" id="choice" name="Speler2" value="Papier" />
        </button>
    </form>

</body>

</html>