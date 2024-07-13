<?php
include 'conexion_be.php';
$nombre=$_POST['nombre'];
$user=$_POST['usuario'];
$email=$_POST['email'];
$telefono=$_POST['celular'];
$genero=$_POST['genero'];
$contraseña=$_POST['contraseña'];
$confircont=$_POST['contraseñaconfir'];

$query="insert into usuarios(usr_nombre, usr_user, usr_email, usr_telefono, usr_genero, usr_contraseña) values('$nombre', '$user', '$email', '$telefono', '$genero', '$contraseña')"or die("Problemas al cargar datos:(".mysqli_error($conexion));

//Verificar que el correo no se repita en la base de datos
$verificar_email = mysqli_query($conexion, "SELECT usr_email FROM usuarios WHERE usr_email='$email'");
if(mysqli_num_rows($verificar_email) > 0){
echo '
    <script>
        alert("El correo ingresado ya está registrado, ingresa otro distinto:(");
        window.location = "../HTML/register-user.html";
    </script>
';
exit();
}

//Verificar que el usuario no se repita en la base de datos
$verificar_user = mysqli_query($conexion, "SELECT usr_user FROM usuarios WHERE usr_user='$user'");
if(mysqli_num_rows($verificar_user) > 0){
echo '
    <script>
        alert("El usuario ya está registrado, ingresa otro distinto:(");
        window.location = "../HTML/register-user.html";
    </script>
';
exit();
}

if($contraseña==$confircont){
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo'
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../HTML/register-user.html";
            </script>
        ';
    }else{
        echo'
        <script>
            alert("Intentalo nuevamente, usuario no almacenado:(");
            window.location = "../HTML/register-user.html";
        </script>
    ';
    };
    
}else{
    echo'
    <script>
        alert("Las contraseñas ingresadas no coinciden");
        window.location = "../HTML/register-user.html";
    </script>
';
}
mysqli_close($conexion);
?>