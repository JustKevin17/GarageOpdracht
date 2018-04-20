<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-zoek-klant1.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<h1>garage zoek op klantid</h1>
<p>
    Dit formulier zoekt een klant op uit de tabel klanten van de database garage
</p>

<form action="gar-zoek-klant2.php" method="post">
    Welk klantid zoekt u?

    <label for="klantidvak"></label>
    <input type="text" name="klantidvak" id="klantidvak"> <br>

    <input type="submit" class="btn waves-effect waves-light">
</form>
</div>
</body>
</html>