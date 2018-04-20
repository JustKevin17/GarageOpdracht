<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-klantAuto2.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
    <h1>garage zoek op klantid</h1>
    <p>
        Dit formulier zoekt de auto's van een bepaalde klant
    </p>
    <?php

    $klantid = $_POST['klantid'];

    require_once "gar-connect.php";

    $sql = $conn->prepare("SELECT klantid, autokenteken, autotype, automerk, autokmstand FROM auto
                      WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "<table>
       <thead>
             <tr>
                <th>klantid</th>
                <th>autokenteken</th>
                <th>automerk</th>
                <th>autotype</th>
                <th>autokmstand</th>
               </tr>
        </thead>
        <tbody>";

    foreach ($sql as $rij) {
        echo "<tr>
                <td>$rij[klantid]</td>
                <td>$rij[autokenteken]</td>
                <td>$rij[automerk]</td>
                <td>$rij[autotype]</td>
                <td>$rij[autokmstand]</td>
               
              </tr>";
    }

    echo "<a href='gar-menu.php'> terug naar het menu </a>";

    ?>
</div>
</body>
</html>