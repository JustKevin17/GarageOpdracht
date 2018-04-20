<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-auto3.php</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="containerTwee">
<h1>garage delete auto 3</h1>
<p>
    Op autokenteken gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden
</p>
<?php
$autokenteken = $_POST['autokenteken'];
$verwijderen = $_POST['verwijdervak'];

if($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare(
        "DELETE FROM auto WHERE autokenteken= :autokenteken"
    );
    $sql->execute(["autokenteken" => $autokenteken]);
    echo "De gegevens zijn verwijderd" . "<br>";
} else {
    echo " De gegevens zijn niet verwijderd" . "<br>";
}

echo "<a href='gar-menu.php'> terug naar het menu </a>";


?>
</div>
</body>
</html>