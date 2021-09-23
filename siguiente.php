<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Completado</title>
    </head>
    <body>
        <?php
            $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : "";
            $telefono= isset($_POST['telefono']) ? $_POST['telefono'] : "";
            $email= isset($_POST['email']) ? $_POST['email'] : "";
            $consulta= isset($_POST['consulta']) ? $_POST['consulta'] : "";
            $correcto= isset($_POST['correcto']) ? $_POST['correcto'] : "";

            echo "Nombre: ".$nombre."<br />";
            echo "Telefono: ".$telefono."<br />";
            echo "Email: ".$email."<br />";
            echo "Correcto: ".$correcto."<br />";
            echo "Consulta: ".$consulta."<br />";


        ?>
    </body>
</html>