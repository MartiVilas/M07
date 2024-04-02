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
<!--------Mostra els números del 100 al 0 posant els parells en negreta----->
<body>
    <?php 

        for($i=100; $i >= 0; $i--){
            if($i%2==0){
                echo "<strong>$i</strong>";
                echo "<br>";
            } else if($i%3==0) {
                echo "<em>$i</em>";
                echo "<br>";
            }
        }

    ?>
</body>
</html>