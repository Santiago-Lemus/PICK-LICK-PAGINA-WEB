<?php
include 'conexion_be.php';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$insertarmensaje = mysqli_query($conexion, "INSERT INTO contacto(con_nombre,con_email,con_mensaje) VALUES('$nombre', '$email', '$mensaje')")or die("Problemas al cargar datos:(".mysqli_error($conexion));

if($insertarmensaje){
    echo'
    <script>
        alert("Recibimos tu mensaje! Te responderemos pronto podamos:P");
        window.history.back();
    </script>
';
}else{
    echo'
    <script>
        alert("Hubo un problema al cargar tu mensaje:(");
        window.history.back();
    </script>
';
};
mysqli_close($conexion);



?>