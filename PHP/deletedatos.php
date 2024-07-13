<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $id_borrado = $_POST['id_borrado'];
    $table = $_POST['tabla'];
    $columna = $_POST['columna'];
    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
    $emailid=$_SESSION['usr_user'];
    $resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
    $fila = mysqli_fetch_assoc($resultado);
    $result = mysqli_query($conexion, "DELETE FROM $table WHERE $columna = $id_borrado;");
    if($result){
        echo '<script>
        alert("El producto se ha borrado del carrito con exito!:D");
        window.history.back();
        </script>';
    }else{
        echo '<script>
        alert("Algo salió mal al borrar el producto:C");
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