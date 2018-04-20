
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant1.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<h1>garage create klant 1</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren
</p>
    <div class="row">
<form action="gar-create-klant2.php" method="post" class="col s12">

    <div class="input-field col s12">
    <label for="klantnaam">Klantnaam: </label>
    <input type="text" name="klantnaam" id="klantnaam" class="col s3">
    </div>

    <div class="input-field col s12">
    <label for="klantadres">Klantadres: </label>
    <input type="text" name="klantadres" id="klantadres" class="col s3">
    </div>

    <div class="input-field col s12">
    <label for="klantpostcode">Klantpostcode: </label>
    <input type="text" name="klantpostcode" id="klantpostcode" class="col s3">
    </div>

    <div class="input-field col s12">
    <label for="klantplaats">Klantplaats: </label>
    <input type="text" name="klantplaats" id="klantplaats" class="col s3">
    </div>

    <input type="submit" class="btn waves-effect waves-light">

</form>
        <div class="row">
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
