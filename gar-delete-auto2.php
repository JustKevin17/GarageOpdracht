<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-delete-auto2.php</title>

</head>
<body>
<div class="container">
<h1>garage delete auto 2</h1>
<p>
    Op autokenteken gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden
</p>
<?php
$autokenteken = $_POST['autokenteken'];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid 
                                FROM auto WHERE autokenteken= :autokenteken ");
$sql->execute(["autokenteken" => $autokenteken]);

echo"<table class=\"striped\">
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

<form action="gar-delete-auto3.php" method="post">
    <input type="hidden" name="autokenteken" <?php echo "value='" . $autokenteken . " '"?>
    <input type="hidden" name="verwijdervak" value="0">
    <label>
        <input type="checkbox" name="verwijdervak" value="1" checked="checked" class="filled-in" id="verwijdervak">
        <span>verwijder deze auto</span>
    </label>
    <input type="submit" class="btn waves-effect waves-light">
</form>
</div>
</body>
</html>*/