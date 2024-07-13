<?php
// session_start();

if(!isset($_SESSION['usr_user'])){
    echo '
        <script>
        alert("Por favor, debes iniciar sesion");
        window.location = "../HTML/login.php";
        </script>
    ';
    die();
    session_destroy();
}

$conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
$emailid=$_SESSION['usr_user'];
$resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
if ($fila = mysqli_fetch_assoc($resultado)){
    $registros=mysqli_query($conexion, "SELECT
    a.id_carrito as 'CODIGO DE COMPRA',
    b.usr_user as 'USUARIO',
    c.prod_referencia as 'PRODUCTO',
    d.prov_nombre as 'FABRICANTE',
    c.prod_descripcion as 'IMAGEN',
    c.prod_vlrventa as 'PRECIO UNITARIO',
    a.cantidad as 'CANTIDAD'
    FROM carrito as a
    INNER JOIN usuarios as b on a.id_usuario=b.id_usuario
    INNER JOIN productos as c on a.id_producto=c.id_producto
    INNER JOIN proveedores as d on c.id_proveedor=d.id_proveedor
    where b.id_usuario=$fila[id_usuario]") or die("Problemas en la conexion:(".mysqli_error($conexion));
    if(mysqli_num_rows($registros) > 0){
        $sumatotal = 0;
        echo "<table id='car-table'><caption>CARRITO DE COMPRAS </caption>
        <tr id='tittles'>
        <th>COD COMPRA</th>
        <th>USUARIO</th>
        <th>PRODUCTO</th>
        <th>FABRICANTE</th>
        <th>IMAGEN</th>
        <th>PRECIO UNITARIO</th>
        <th>BORRAR</th>
        </tr>";
        while($reg=mysqli_fetch_array($registros))
        {
            echo "<tr><form action='../PHP/borrar_carrito.php' method='post'><td>".$reg['CODIGO DE COMPRA']."<input type='hidden' name='id_borrado' value=".$reg['CODIGO DE COMPRA']."></td>";
            echo "<td>".$reg['USUARIO']."</td>";
            echo "<td>".$reg['PRODUCTO']."</td>";
            echo "<td>".$reg['FABRICANTE']."</td>";
            echo "<td><img src=".$reg['IMAGEN']."></td>";
            echo "<td>$  ".number_format($reg['PRECIO UNITARIO'],0, '', '.')."</td>";
            echo "<td><input type='submit' value='Eliminar' class='delete_button'></td></form></tr>";
            $sumatotal +=$reg['PRECIO UNITARIO'];
        }
        echo "</table>
        <div id='carrito_total'>
            <h2>TOTAL: </h2>
            <p>$  ".number_format($sumatotal,0, '', '.')."</p>
        </div>
        <div id='car_buttons'>
            <form action='../PHP/borrarall_carrito.php' method='POST'>
                <input type='submit' value='LIMPIAR CARRITO' id='deleteall_button'>
            </form>
            <a href='../HTML/insertcliente.php'>CONTINUAR CON LA COMPRA</a>
        </div>"
        ;
    }else{
        echo '<h1 id="car-vacio-tittle">CARRITO DE COMPRAS</h1>
        <p>Parece que no te ha convencido ningun producto, el carrito se encuentra vacío:(</p>
        ';
    }
}else{
    echo 'papi error';
}
?>