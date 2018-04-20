<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-klant3.php</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="containerTwee">
<h1>garage update klant 3</h1>
<p>
    Klantgegevens wijzigen in de tabel
    klant van de database garage
</p>
<?php
$klantid = $_POST["klantid"];
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];

require_once "gar-connect.php";

$sql = $conn->prepare("UPDATE klant 
                                SET klantnaam= :klantnaam,
                                    klantadres= :klantadres,
                                    klantpostcode= :klantpostcode,
                                    klantplaats= :klantplaats
                                WHERE klantid= :klantid");

$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
]);
echo "De klant is gewijzigd . <br>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</div>
</body>
</html>