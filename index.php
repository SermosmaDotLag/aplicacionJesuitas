<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=ç, initial-scale=1.0">
        <link rel="stylesheet" href="lugar.css">
        <title>Document</title>
    </head>
    <body>
        <h1>CRUD de Lugares</h1>

        <!-- Formulario para Crear un Lugar -->
        <h2>Crear un nuevo lugar:</h2>
        <form action="crear.php" method="post">
            <label for="ip">IP:</label>
            <input type="text" name="ip" required><br>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea><br>

            <input type="submit" value="Guardar">
        </form>

        <!-- Formulario para Actualizar un Lugar -->
        <h2>Actualizar un lugar:</h2>
        <form action="actualizar.php" method="post">

            <label for="ip">Nueva IP:</label>
            <input type="text" name="ip" required><br>

            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="descripcion">Nueva Descripción:</label>
            <textarea name="descripcion" required></textarea><br>

            <input type="submit" name="update" value="Actualizar">
        </form>

        <!-- Formulario para Borrar un Lugar -->
        <h2>Borrar un lugar:</h2>
        <form action="borrar.php" method="post">
            <label for="ip">IP del Lugar a borrar:</label>
            <input type="text" name="ip" required><br>

            <input type="submit" value="Borrar">
        </form>

        <!-- Listar Lugares -->
        <h2>Listado de Lugares:</h2>
        <table>
            <tr>
                <th>IP</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            <?php
            include 'lugar.php';
            include 'conexion.php';
            $lugar = new Lugar($host, $username, $passwd, $bdname);
            $lugares = Array();
            $lugares = $lugar->listarLugares();

            foreach ($lugares as $row) {
                echo "<tr>";
                echo "<td>" . $row["ip"] . "</td>";
                echo "<td>" . $row["lugar"] . "</td>";
                echo "<td>" . $row["descripcion"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>l