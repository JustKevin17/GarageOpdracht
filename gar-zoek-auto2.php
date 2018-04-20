<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-auto2.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<h1>garage zoek op kenteken</h1>
<p>
    Op kenteken gegevens zoeken uit de tabel klanten van de database garage
</p>
<?php
$autokenteken= $_POST['autokenteken'];

//klantgegevens uit e tabel halen
require_once  "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto
                      WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

echo"<table>
       <thead>
             <tr>
                <th>autokenteken</th>
                <th>automerk</th>
                <th>autotype</th>
                <th>autokmstand</th>
                <th>klantid</th>
               </tr>
        </thead>
        <tbody>";

foreach ($sql as $rij){
    echo "<tr>
                <td>$rij[autokenteken]</td>
                <td>$rij[automerk]</td>
                <td>$rij[autotype]</td>
                <td>$rij[autokmstand]</td>
                <td>$rij[klantid]</td>
               
              </tr>";}

echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</div>
</body>
</html>