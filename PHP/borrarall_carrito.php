<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
    $emailid=$_SESSION['usr_user'];
    $resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
    $fila = mysqli_fetch_assoc($resultado);
    $verificarprod = mysqli_query($conexion, "DELETE FROM carrito WHERE id_usuario=$fila[id_usuario]");
    if($verificarprod){
        echo '<script>
        alert("El carrito de compras se ha limpiado!:D");
        window.history.back();
        </script>';
    }else{
        echo '<script>
        alert("Algo salió mal al borrar los producto:C");
        window.history.back();
        </script>';
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