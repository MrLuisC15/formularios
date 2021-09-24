<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Completado</title>
    </head>
    <body>
        <?php
            $nombre= isset($_GET['nombre']) ? $_GET['nombre'] : "";
            $telefono= isset($_GET['telefono']) ? $_GET['telefono'] : "";
            $email= isset($_GET['email']) ? $_GET['email'] : "";
            $consulta= isset($_GET['consulta']) ? $_GET['consulta'] : "";
            $correcto= isset($_GET['correcto']) ? $_GET['correcto'] : "";

            echo "Nombre: ".$nombre."<br />";
            echo "Telefono: ".$telefono."<br />";
            echo "Email: ".$email."<br />";
            echo "Correcto: ".$correcto."<br />";
            echo "Consulta: ".$consulta."<br />";


        ?>
    </body>
</html>