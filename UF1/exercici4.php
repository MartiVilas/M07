<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------CSS------------------>
    <link rel="stylesheet" href="./style.css">
    <!----------------SCRIPT-------------->
    <script src="./main.js" defer></script>

    <title>Ex4: Mostra els links dels 10 primers numeros</title>
</head>

<body>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            $link = "https://es.wikipedia.org/wiki/$i";
            echo "<li><a href='$link'>$i</a></li>";
        }
    ?>
</body>
</html>