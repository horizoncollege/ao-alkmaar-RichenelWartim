<?php
session_start();
$uitslag = "";
$KeuzeSpeler1 = $_SESSION["Speler1"];
$keuzeSpeler2 = $_GET['Speler2'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Steen, papier, schaar</h1>

    <h3>Speler 1 </h3>
    <?php
    echo  $_SESSION["Speler1"];
    ?>

    <h3>Speler 2 </h3>
    <?php
    if ($_GET["Speler2"]) {
        echo $_GET['Speler2'];
    }
    ?>

    <!-- Determines who wins and then shows the winner -->
    <?php
    if (
        $KeuzeSpeler1 == "Steen" && $keuzeSpeler2 == "Schaar" ||
        $KeuzeSpeler1 == "Papier" && $keuzeSpeler2 == "Steen" ||
        $KeuzeSpeler1 == "Schaar" && $keuzeSpeler2 == "Papier"
    ) {
        echo "<h1> Speler 1 wint</h1>";
    } elseif (
        $keuzeSpeler2 == "Steen" && $KeuzeSpeler1 == "Schaar" ||
        $keuzeSpeler2 == "Papier" && $KeuzeSpeler1 == "Steen" ||
        $keuzeSpeler2 == "Schaar" && $KeuzeSpeler1 == "Papier"
    ) {
        echo "<h1> Speler 2 wint</h1>";
    } else {
        echo "<h1>Jullie hebben dezelfde optie gekozen</h1>";
    }
    header("Refresh:10; url=index.php")
    ?>

    <form action="index.php">
        <input type="submit" value="Terug naar homescreen">
    </form>
    
</body>

</html>