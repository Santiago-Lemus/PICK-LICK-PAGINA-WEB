<?php
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
        while($reg=mysqli_fetch_array($registros))
        {
            echo "<div class='total_box'>
                <p class='total_tittle'>".$reg['PRODUCTO']."</p>
                <p class='total_price'>$  ".number_format($reg['PRECIO UNITARIO'],0, '', '.')."</p></div>";
                $sumatotal +=$reg['PRECIO UNITARIO'];
        }
        echo "
            <div id='total_resumen'>
            <h2>PAGAS : </h2>
            <p id='productos_total'>$  ".number_format($sumatotal,0, '', '.')."</p></div>"
        ;
    }
}else{
    echo 'papi error';
}
?>