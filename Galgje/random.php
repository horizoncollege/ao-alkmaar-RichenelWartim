<?php

// generates the random words
session_start();
session_unset();
$_SESSION['woorden'] = ['pindakaas', 'telefoonhoesje', "helium", "frikandelbroodje", "racisme", "docent", "programmeur", "blackjack", "poker", "zwemmen", 
"avondeten", "lunch", "tovenaar", "magie", "kat", "rozijn"];
$_SESSION['woord'] = str_split($_SESSION['woorden'][array_rand($_SESSION['woorden'])]);
header('Location: galgje.php');