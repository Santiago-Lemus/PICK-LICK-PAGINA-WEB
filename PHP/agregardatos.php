<?php
$conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];
$var4 = $_POST['var4'];
$var5 = $_POST['var5'];
$var6 = $_POST['var6'];
$back1 = $_POST['back1'];
$back2 = $_POST['back2'];
$back3 = $_POST['back3'];
$back4 = $_POST['back4'];
$back5 = $_POST['back5'];
$back6 = $_POST['back6'];
$tabla = $_POST['tabla'];

$registro = mysqli_query($conexion, "INSERT INTO $tabla($back2, $back3, $back4, $back5, $back6) VALUES('$var2', '$var3', '$var4', '$var5', '$var6')")or die("Problemas en el insert".mysqli_error($conexion));
if($registro){
    echo '<script>
    alert("El nuevo dato se ha ingresado correctamente!");
    window.history.back();
    </script>';
}else{
    echo '<script>
    alert("Algo salió mal al borrar el producto:C");
    window.history.back();
    </script>';
}
?>