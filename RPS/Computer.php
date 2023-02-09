<?php
session_start();
$_SESSION["Speler1"] = $_POST['choices'];
$random = rand(1, 3); 



$uitslag = "";
$KeuzeSpeler1 = $_SESSION["Speler1"];
//bepaalt wat de computer als keuze neemt
if ($random == 1) {
    $keuzeSpeler2 = "Steen";
} elseif ($random == 2) {
    $keuzeSpeler2 = "Papier";
} else {
    $keuzeSpeler2 = "Schaar";
}
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

    <h3>Jij speelde:</h3>
    <?php
    echo  $_SESSION["Speler1"];
    echo "<h3>De computer speelde: </h3>";
    echo "$keuzeSpeler2";
    ?>    

    <?php
    if (
        $KeuzeSpeler1 == "Steen" && $keuzeSpeler2 == "Schaar" ||
        $KeuzeSpeler1 == "Papier" && $keuzeSpeler2 == "Steen" ||
        $KeuzeSpeler1 == "Schaar" && $keuzeSpeler2 == "Papier"
    ) {
        echo "<h1>Jij wint</h1>";
    } elseif (
        $keuzeSpeler2 == "Steen" && $KeuzeSpeler1 == "Schaar" ||
        $keuzeSpeler2 == "Papier" && $KeuzeSpeler1 == "Steen" ||
        $keuzeSpeler2 == "Schaar" && $KeuzeSpeler1 == "Papier"
    ) {
        echo "<h1> De computer wint </h1>";
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