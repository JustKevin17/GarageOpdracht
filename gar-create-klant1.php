<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gar-create-klant1.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
<h1>garage create klant 1</h1>
<p>Dit formulier wordt gebruikt om klantgegevens in te voeren</p>
<form action="gar-create-klant2.php" method="post" class="row">
    <div class="input-field col s6">
    klantnaam : <input type="text" name="klantnaamvak"><br/>
    </div>
    <div class="input-field col s6">
    klantadres : <input type="text" name="klantadresvak"><br/>
    </div>
        <div class="input-field col s6">
    klantpostcode : <input type="text" name="klantpostcodevak"><br/>
        </div>
            <div class="input-field col s6">
    klantplaats : <input type="text" name="klantplaatsvak"><br/>
            </div>
    <input type="submit">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>