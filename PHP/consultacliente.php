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
            <h2>Consulta los clientes registrados con tu ID</h2>
            <?php
            $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
            $nom = $_POST['nomcliente'];
            $registros = mysqli_query($conexion, "SELECT * FROM clientes WHERE clie_nombre LIKE '%$nom%'")or die("Problemas en el select:(".mysqli_error($conexion));
            if(mysqli_num_rows($registros) > 0){
                if($reg = mysqli_fetch_array($registros)){
                    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
                    echo "Se efectuó la busqueda en el registro solicitado<br><br>";
                    $registros = mysqli_query($conexion, "SELECT * FROM clientes WHERE clie_nombre LIKE '%$nom%'")or die("Problemas en el select:(".mysqli_error($conexion));
                    echo "<table id='search-table'><caption>REGISTROS CARGO </caption>
                    <tr>
                    <th>ID CLIENTE</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>NUMERO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>EMAIL</th>
                    <th>CIUDAD</th>
                    </th>
                    <tr>";
                    while($reg=mysqli_fetch_array($registros))
                    {
                        echo "<td>".$reg['id_cliente']."</td>";
                        echo "<td>".$reg['clie_nombre']."</td>";
                        echo "<td>".$reg['clie_apellido']."</td>";
                        echo "<td>".$reg['clie_tipdoc']."</td>";
                        echo "<td>".$reg['clie_numdoc']."</td>";
                        echo "<td>".$reg['clie_direccion']."</td>";
                        echo "<td>".$reg['clie_telefono']."</td>";
                        echo "<td>".$reg['clie_email']."</td>";
                        echo "<td>".$reg['clie_ciudad']."</td></tr>";
                    }
                    echo "</table>";
                }
            }else{
                echo 'La consulta realizada NO EXISTE!';
            }
            ?>
        </div>
    </section>
</body>
</html>