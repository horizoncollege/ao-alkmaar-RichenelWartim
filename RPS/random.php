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
    <title>steen, papier, schaar</title>
</head>

<body>
    <h1>Steen, papier, schaar</h1>

    <h3>Speler 1</h3>
    <form action="Computer.php" method="post">
        <button type="submit" method="post" name="choices" value="Steen">
            <img src="img/Steen.png" alt="buttonpng" id="choice" name="choices" value="Steen" />
        </button>
        <button type="submit" method="post" name="choices" value="Schaar">
            <img src="img/schaar.png" alt="buttonpng" id="choice" name="choices" value="Schaar" />
        </button>
        <button type="submit" method="post" name="choices" value="Papier">
            <img src="img/papier.png" alt="buttonpng" id="choice" name="choices" value="Papier" />
        </button>
    </form>
</body>

</html>