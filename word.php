<?php
$paragrafo = $_GET["paragraph"];
$badWord = $_GET["censure"];
echo "<br />" . "Paragrafo: " . $paragrafo . "<br />" . "Parola da censurare: " . $badWord;
echo "<br />" . "Numero caratteri nel paragrafo: ". strlen($paragrafo);
echo "<br />" . "Paragrafo censurato: ". str_replace($badWord, "***", $paragrafo);
$paragrafoArray = explode(" ", $paragrafo);
echo "<br />" . "Numero di parole nel paragrafo: ". count($paragrafoArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
</head>  
</body>
</html>