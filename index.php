<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <title>Générateur de sondages</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="">
    <script src=""></script>

    <body>

        <form action="http://localhost:8000/form_generator.php" target="_blank" method="POST">
            <label for="number">Indiquez le nombre de questions à poser</label>
            <input type="number" name="number">
            <label for="question">Indiquez la question à poser</label>
            <input type="text" name="question">
            <input type="submit" value="Envoyer">
        </form>

    </body>
</html>