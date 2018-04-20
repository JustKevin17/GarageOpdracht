<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-update-klant2.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<h1>garage update klant 2</h1>
<p>
    Dit formulier wordt gebruikt om de klantgegevens te wijzigen in de tabel klant van de database garage
</p>
<?php
$klantid = $_POST['klantid'];
$_SESSION['klantid'] = $_POST['klantid'];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant
                      WHERE klantid = :klantid");
$sql->execute(["klantid" => $klantid]);

?>
<div class="row">
<form action="gar-update-klant3.php" method="post">

<?php
foreach ($sql as $klant){
    $_SESSION['id'] = $klant['klantid'];
    echo "
 <input type=\"hidden\" name=\"klantid\"         value=\"" . $klant['klantid']         . "\"><br>
klantnaam:       <input type=\"text\"   name=\"klantnaam\"       value=\"" . $klant['klantnaam']       . "\"><br>
klantadres:    <input type=\"text\"   name=\"klantadres\"    value=\"" . $klant['klantadres']    . "\"><br>
klantpostcode: <input type=\"text\"   name=\"klantpostcode\" value=\"" . $klant['klantpostcode'] . "\"><br>
klantplaats:       <input type=\"text\"   name=\"klantplaats\"       value=\"" . $klant['klantplaats']       . "\"><br>
<input type=\"submit\" class=\"btn waves-effect waves-light\">
";
}

if(isset($_SESSION['id']) !== isset($_SESSION['klantid'])) {
    echo "Deze klant bestaat niet";
}
?>
</div>
</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>

