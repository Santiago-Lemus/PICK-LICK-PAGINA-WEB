<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/carshoping.css">
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/stylesheet.css">
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <section id="login-content-search">
        <div class="login-container-search">
            <h2>RESULTADO</h2>
            <?php
            $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
            $table=$_POST['tabla'];
            $columna_query = mysqli_query($conexion, "SHOW COLUMNS FROM $table");
            $columna_nombres = array();
            while ($columna = mysqli_fetch_assoc($columna_query)) {
                $columna_nombres[] = $columna['Field'];
            }
            $registros = mysqli_query($conexion, "SELECT " . implode(', ', array_slice($columna_nombres, 0, 6)) . " FROM $table") or die("Problemas en el select: " . mysqli_error($conexion));
            ?>
            <table id="table-datos">
                <tr>
                <?php
                foreach (array_slice($columna_nombres, 0, 6) as $columna) {
                    echo "<th>$columna</th>";
                }
                ?>
                </tr>
                <?php
                while ($fila = mysqli_fetch_assoc($registros)) {
                    echo "<tr><form action='deletedatos.php' method='post'><input type='hidden' name='id_borrado' value=" . $fila[array_keys($fila)[0]] . ">";
                    echo "<input type='hidden' name='tabla' value='$table'>";
                    echo "<input type='hidden' name='columna' value='".$columna_nombres[0]."'>";
                    foreach (array_slice($columna_nombres, 0, 6) as $columna) {
                        echo "<td>" . $fila[$columna] . "</td>";
                        
                    }
                    echo "<td><input type='submit' value='Eliminar' class='delete_button_datos'></td></form></tr>";
                }
                ?>
            </table>

        </div>
    </section>
</body>
</html>