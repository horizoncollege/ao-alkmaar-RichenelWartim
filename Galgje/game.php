<?php
session_start();
if (!isset($_SESSION['Actief'])) {
    $_SESSION['display'] = array();
    $_SESSION['letters'] = range('A', 'Z');
    $_SESSION['guesses'] = [];
    $_SESSION['fouten'] = 0;
    $_SESSION['Actief'] = true;
    foreach ($_SESSION['woord'] as $key => $value) {
        array_push($_SESSION['display'], '*');
    }
}


//checks if chosen character is (in)correct and adds a mistake if it is incorrect, then removes the letter so you can't make the same guess twice!
if (isset($_POST['letter'])) {
    foreach ($_SESSION['letters'] as $char) {
        if ($_POST['letter'] == $char) {
            if (in_array(strtolower($_POST['letter']), $_SESSION['woord'])) {
                foreach ($_SESSION['woord'] as $key => $value) {
                    if ($value == strtolower($_POST['letter'])) {
                        $_SESSION['display'][$key] = $value;
                    }
                    $_SESSION['correct'] = true;
                }
            } else {
                $_SESSION['fouten']++;
                $_SESSION['correct'] = false;
            }
                array_push($_SESSION['guesses'], strtolower($_POST['letter']));
                unset($_SESSION['letters'][array_search($_POST['letter'], $_SESSION['letters'])]);
        }
    }
}

if (isset($_POST['random'])) {
    header('Location: random.php');
} elseif (isset($_POST['gekozen'])) {
    header('Location: gekozen.php');
} elseif (isset($_POST['start'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galgje</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>


    <div>
        <?php 

        // Zorgt dat de hangman er goed hangt
        switch ($_SESSION['fouten']) {
            case 0:
                echo '<img src="images/Death1.png">';
                break;
            case 1:
                echo '<img src="images/Death2.png">';
                break;
            case 2: 
                echo '<img src="images/Death3.png">';
                break;
            case 3:
                echo '<img src="images/Death4.png">';
                break;
            case 4:
                echo '<img src="images/Death5.png">';
                break;
            case 5:
                echo '<img src="images/Death6.png">';
                break;
            case 6:
                echo '<img src="images/Death7.png">';
                break;
            case 7:
                echo '<img src="images/Death8.png">';
                break;
            case 8:
                 echo '<img src="images/Death9.png">';
                break;  
            case 9:
                echo '<img src="images/Death10.png">';
                break;
            case 10:
                echo '<img src="images/Death11.png">';
                break;
            case 11:
                echo '<img src="images/Death12.png">';
                $_SESSION['verloren'] = true;
                header("Refresh:3; url=index.php");
                break;
        }?>
    </div>
    <form method="post">
        <?php 
        echo "<h2>" . implode($_SESSION['display']) . "</h2><br>";

        if (isset($_SESSION['correct'])) {
            if ($_SESSION['correct']) {
                echo "<h3>Goed! Deze letter zit in het woord</h3>";
            } else {
                echo "<h3>Fout! Deze letter zit niet in het woord</h3>";
            }
        }

        if ($_SESSION['woord'] === $_SESSION['display']) {
            echo '<h1>GEWONNEN!</h1>';
            header("Refresh:2; url=index.php");
        } elseif (isset($_SESSION['verloren'])) {
            echo '<h1>VERLOREN!</h1>';
        } else {
            foreach ($_SESSION['letters'] as $char) {
                echo '<input type="submit" name="letter" id="Alphabet" value="' . $char . '"></input>';
            }
        }?>
        <input type="submit" name="start" value="terug naar start" id="start">
    </form>
    <audio type="audio/mp3" src="song/S7MyYTxW6M03.128.mp3" autoplay loop>
</body>
</html>