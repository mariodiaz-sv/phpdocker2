<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deploy php en docker</title>
</head>
<body>
    <header>
        <h1>Bienvenido</h1>
    </header>
    <section>
        <?php
            $fecha_actual=date("d/m/Y H:i:s");
            echo "<p>La fecha y hora actual es: $fecha_actual </p>";
        ?>
    </section>
    <footer>
    <?php echo date("Y"); ?> Desarrollado por Mario Diaz mariodiaz-sv
    </footer>
</body>
</html>


