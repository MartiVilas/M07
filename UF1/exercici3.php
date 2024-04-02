<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------CSS------------------>
    <link rel="stylesheet" href="./style.css">
    <!----------------SCRIPT-------------->
    <script src="./main.js" defer></script>

    <title>Titulo</title>
</head>

<body>

    <?php
        for ($i = 1; $i <= 10; $i++) {
                $resultado = $i * 7;
                echo "$i * 7 = $resultado ";
                echo "<br>";
            }
    ?>

</body>
</html>