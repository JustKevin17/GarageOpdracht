<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-auto3.php</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="containerTwee">
<h1>garage update auto 3</h1>
<p>
    Autogegevens wijzigen in de tabel
    auto van de database garage
</p>
<?php
$autokenteken = $_POST['autokenteken'];
$automerk = $_POST['automerk'];
$autotype = $_POST['autotype'];
$autokmstand = $_POST['autokmstand'];

require_once "gar-connect.php";

$sql = $conn->prepare("UPDATE auto
                                SET automerk= :automerk,
                                    autotype= :autotype,
                                    autokmstand= :autokmstand
                                WHERE autokenteken= :autokenteken");

$sql->execute([
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
]);


echo "De auto is gewijzigd . <br>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</div>
</body>
</html>