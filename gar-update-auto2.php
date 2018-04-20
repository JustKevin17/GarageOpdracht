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
    <title>gar-update-auto2.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<h1>garage update auto 2</h1>
<p>
    Dit formulier wordt gebruikt om de autogegevens te wijzigen in de tabel auto van de database garage
</p>
<?php
$autokenteken = $_POST['autokenteken'];
$_SESSION['autokenteken'] = $_POST['autokenteken'];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto 
                                WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

?>

<form action="gar-update-auto3.php" method="post">

<?php
foreach ($sql as $auto){
    $_SESSION['kenteken'] = $auto['autokenteken'];
    echo "
     <input type=\"hidden\"   name=\"autokenteken\"       value=\"" . $auto['autokenteken']       . "\"><br>
automerk:    <input type=\"text\"   name=\"automerk\"    value=\"" . $auto['automerk']    . "\"><br>
autotype: <input type=\"text\"   name=\"autotype\" value=\"" . $auto['autotype'] . "\"><br>
autokmstand:       <input type=\"text\"   name=\"autokmstand\"       value=\"" . $auto['autokmstand']       . "\"><br>
<input type=\"submit\"  class=\"btn waves-effect waves-light\">
";
}

if(isset($_SESSION['kenteken']) !== isset($_SESSION['autokenteken'])) {
    echo "Deze auto bestaat niet";
}
?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>

