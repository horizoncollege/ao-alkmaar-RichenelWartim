<?php
session_start();
session_unset();
?>
<!DOCTYPE html>
<html>
<head>
    <title>gekozen</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Galgje</h1>
    <h3>Typ hier je woord in:</h3>
    <form method="POST">

        <!-- Hier kies je het woord -->
        <input type="text" name="woord" id= "woord" placeholder="Typ hier je woord"> 
        <input type="submit" value="speel met dit woord" id="gekozenbtn">
    </form>
    <?php

    // Woord wordt verstuurd naar game.php
    if (isset($_POST['woord'])) {
        $_SESSION["woord"] = str_split($_POST['woord']);
        header('location: galgje.php');
    }
    ?>
</body>
</html>