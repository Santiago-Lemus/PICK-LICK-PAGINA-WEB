<?php
session_start();

if(!isset($_SESSION['usr_user'])){
    echo '
        <script>
        alert("Por favor, debes iniciar sesion");
        window.location = "../HTML/login.php";
        </script>
    ';
    die();
    session_destroy();
};

function showFinal(){
    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
    $emailid=$_SESSION['usr_user'];
    $resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
    $fila = mysqli_fetch_assoc($resultado);
    $registros = mysqli_query($conexion, "SELECT 
    b.clie_nombre AS 'NOMBRE',
    b.clie_apellido AS 'APELLIDO',
    b.clie_email AS 'EMAIL',
    d.usr_nombre AS 'USUARIO',
    f.prod_referencia AS 'PRODUCTO',
    g.prov_nombre AS 'PROVEEDOR',
    f.prod_descripcion AS 'IMAGEN',
    f.prod_vlrventa AS 'PRECIO UNITARIO',
    c.env_ciudad AS 'CIUDAD',
    c.env_direccion AS 'DIRECCION',
    c.env_tipoenv AS 'TIPOENV',
    c.env_codigo AS 'CODIGO',
    c.env_anotaciones AS 'ANOTACIONES',
    c.env_fechrecibido AS 'FECHRECIBIDO'
    FROM carrito AS a 
    INNER JOIN clientes AS b ON a.id_usuario = b.id_usuario AND b.id_cliente = (SELECT MAX(id_cliente) FROM clientes WHERE id_usuario = $fila[id_usuario])
    INNER JOIN envios AS c ON a.id_usuario = c.id_usuario AND c.id_envios = (SELECT MAX(id_envios) FROM envios WHERE id_usuario = $fila[id_usuario])
    INNER JOIN usuarios AS d ON a.id_usuario = d.id_usuario
    INNER JOIN productos AS f ON a.id_producto = f.id_producto
    INNER JOIN proveedores AS g ON f.id_proveedor = g.id_proveedor
    WHERE d.id_usuario = $fila[id_usuario]
    GROUP BY f.prod_referencia;")or die("Problemas en la conexion:(".mysqli_error($conexion));
    if(mysqli_num_rows($registros) > 0){
        $sumatotal = 0;
        $reg = mysqli_fetch_array($registros);
        echo "<div id='confirm_container'>
        <div class='decoration'>
        <h1>DATOS DE FACTURACIÓN</h1>
        <div class='decoration_line'></div>
        </div>
        <div class='confir_dates'>
            <div class='confir_minidates'>
                <div class='line_date'><p class='line_tittle'>Titular</p><p>".$reg['NOMBRE']." ".$reg['APELLIDO']."</p></div>
                <div class='line_date'><p class='line_tittle'>Email</p><p>".$reg['EMAIL']."</p></div>
                <div class='line_date'><p class='line_tittle'>Usuario</p><p> @ ".$reg['USUARIO']."</p></div>
            </div>
        </div>
        <div class='decoration'>
        <h1>DATOS DE ENVÍO</h1>
        <div class='decoration_line'></div>
        </div>
            <div class='confir_minidates'>
                <div class='line_date'><p class='line_tittle'>Ciudad</p><p>".$reg['CIUDAD']."</p></div>
                <div class='line_date'><p class='line_tittle'>Dirección</p><p>".$reg['DIRECCION']."</p></div>
                <div class='line_date'><p class='line_tittle'>Tipo de envío</p><p>".$reg['TIPOENV']."</p></div>
                <div class='line_date'><p class='line_tittle'>Código postal</p><p>".$reg['CODIGO']."</p></div>
                <div class='line_date'><p class='line_tittle'>Anotaciones</p><p>".$reg['ANOTACIONES']."</p></div>
            </div>
        <div class='decoration'>
        <h1>PRODUCTOS</h1>
        <div class='decoration_line'></div>
        </div>
        <div class='confir_minidates'>";
        do{
            echo "<div class='minidate_image'>
                <div class='minidate_dates'>
                <p class='line_tittle'>".$reg['PRODUCTO']."</p>
                <p class='provedoor'>".$reg['PROVEEDOR']."</p>
                <p class='minidate_price'>$ ".number_format($reg['PRECIO UNITARIO'],0, '', '.')."</p>
                </div>
                <img src=".$reg['IMAGEN'].">
                </div>";
                $sumatotal +=$reg['PRECIO UNITARIO'];
        }while ($reg = mysqli_fetch_array($registros));
        echo "</div> 
        <div class='decoration'>
        <h1>TOTALES</h1>
        <div class='decoration_line'></div>
        </div>
        <div class='confir_minidates'>
            <div class='line_date'><p class='line_tittle'>Productos</p><p>$  ".number_format($sumatotal,0, '', '.')."</p></div>
            <div class='line_date'><p class='line_tittle'>Envío</p><p id='free'>Gratis!</p></div>
        </div>
        <div class='confir_minidates'>
            <div class='line_date'><h3>TOTAL A PAGAR: </h3><h3>$  ".number_format($sumatotal,0, '', '.')."</h3></div
        </div>
        <div id='confir_button'>
        <form action='../PHP/compra_realizada.php' method='POST'>
            <input type='submit' value='CONFIRMAR COMPRA' id='deleteall_button'>
        </form>
        </div>
        </div>";
    }else{
        echo 'Hermanito en algo la cagaste';
    }
};

showFinal();

?>