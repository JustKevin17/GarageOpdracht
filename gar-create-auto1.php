<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto1.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
    <h1>garage create auto 1</h1>
    <p>
        Dit formulier wordt gebruikt om autogegevens in te voeren
    </p>
    <div class="row">
        <form action="gar-create-auto2.php" method="post" class="col s12">

            <div class="input-field col s12">
                <label for="klantid">Klantid: </label>
                <input type="text" name="klantid" id="klantid" class="col s12">
            </div>
            <div class="input-field col s12">
                <label for="autokenteken">Autokenteken: </label>
                <input type="text" name="autokenteken" id="autokenteken" class="col s12">
            </div>

            <div class="input-field col s12">
                <label for="automerk">Automerk: </label>
                <input type="text" name="automerk" id="automerk" class="col s12">
            </div>

            <div class="input-field col s12">
                <label for="autotype">Autotype: </label>
                <input type="text" name="autotype" id="autotype" class="col s12">
            </div>

            <div class="input-field col s12">
                <label for="autokmstand">Autokmstand: </label>
                <input type="text" name="autokmstand" id="autokmstand" class="col s12">
            </div>

            <br>
            <input type="submit" class="btn waves-effect waves-light">

        </form>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>