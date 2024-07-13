<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
    $emailid=$_SESSION['usr_user'];
    $resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
    $fila = mysqli_fetch_assoc($resultado);

    $buscarcliente = mysqli_query($conexion, "SELECT MAX(id_cliente) AS id_cliente FROM clientes WHERE id_usuario = $fila[id_usuario]");
    $filacliente = mysqli_fetch_assoc($buscarcliente);

    $fecha_exp = date("Y-m-d");
    $fecha_ven = date("Y-m-d", strtotime($fecha_exp . " +365 days"));
    $insertarfactura = mysqli_query($conexion, "INSERT INTO facturas_cabeza(factcab_fechexpe, factcab_fechven, id_cliente, id_empleado) VALUES ('$fecha_exp', '$fecha_ven', {$filacliente['id_cliente']}, 1)") or die("Problemas al cargar datos: " . mysqli_error($conexion));
    if($insertarfactura){
        $consultacarrito = mysqli_query($conexion, "SELECT
        a.id_producto as 'CODIGO_PRODUCTO',
        b.prod_vlrventa as 'VALOR'
        FROM carrito as a 
        INNER JOIN productos as b on a.id_producto=b.id_producto
        where id_usuario = $fila[id_usuario]");
        while($reg=mysqli_fetch_array($consultacarrito)){
            $consultafactcabeza = mysqli_query($conexion, "SELECT MAX(id_facturacabeza) AS id_facturacabeza FROM facturas_cabeza WHERE id_cliente = $filacliente[id_cliente]");
            $filafactcabeza = mysqli_fetch_assoc($consultafactcabeza);
            $insertarfactdetalle = mysqli_query($conexion, "INSERT INTO facturas_detalle(id_facturacabeza, factdet_formadepago, id_producto, factdet_cantidad, factdet_vlrunitario, factdet_monto, factdet_subtotal, factdet_iva, factdet_descuento, factdet_total)VALUES($filafactcabeza[id_facturacabeza],'transferencia', $reg[CODIGO_PRODUCTO], 1, $reg[VALOR], $reg[VALOR], $reg[VALOR], 0, 0, $reg[VALOR])");
        };
        $deletecarrito = mysqli_query($conexion, "DELETE FROM carrito WHERE id_usuario=$fila[id_usuario]");
        echo '
        <script>
        alert("¡Gracias por tu compra! Esperamos que disfrutes tu compra<3");
        window.location = "../index.php";
        </script>
    ';}else{
        echo 'Mostro algo salió mal al insertar la factura agh:(';
    }
    }else{
        echo '
        <script>
        alert("Por favor, debes iniciar sesion");
        window.location = "../HTML/login.php";
        </script>
    ';
}
?>