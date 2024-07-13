<?php
session_start();
function add_car($producto){
    $conexion=mysqli_connect("localhost","root","","pick_lick_bdd")or die("Problemas con la conexion");
    $emailid=$_SESSION['usr_user'];
    $resultado=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usr_email='$emailid'");
    $fila = mysqli_fetch_assoc($resultado);
    $verificar_prod = mysqli_query($conexion, "SELECT * FROM carrito WHERE id_usuario=$fila[id_usuario] AND id_producto=$producto");
    if(mysqli_num_rows($verificar_prod) > 0){
    echo '
        <script>
            alert("El producto ya se encuentra en el carrito, ganos@");
            window.history.back();
        </script>
    ';}else{
    if ($fila) {
            $query="insert into carrito(id_usuario, id_producto, cantidad) values($fila[id_usuario],$producto,1)"or die("Problemas al cargar datos:(".mysqli_error($conexion));
            $ejecutar = mysqli_query($conexion, $query);
            if($ejecutar){
                echo '<script>
                alert("El producto se ha añadido al carrito!:D");
                window.history.back();
                </script>';
            }else{
                echo 'Problemas al ingresar los datos al carrito:(';
            }
    }else{
        echo '
        <script>
        alert("Intentalo nuevamente, hubo un problema en el if inicial:(");
        window.history.back();
        </script>
        ';
    }
}}

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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion1'])) {
    add_car(1);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion2'])){
    add_car(2);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion3'])){
    add_car(3);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion4'])){
    add_car(4);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion5'])){
    add_car(5);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion6'])){
    add_car(6);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion7'])){
    add_car(7);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion8'])){
    add_car(8);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion9'])){
    add_car(9);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion10'])){
    add_car(10);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion11'])){
    add_car(11);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion12'])){
    add_car(12);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion13'])){
    add_car(13);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion14'])){
    add_car(14);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion15'])){
    add_car(15);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion16'])){
    add_car(16);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion17'])){
    add_car(17);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion18'])){
    add_car(18);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion19'])){
    add_car(19);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion20'])){
    add_car(20);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion21'])){
    add_car(21);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion22'])){
    add_car(22);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion23'])){
    add_car(23);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion24'])){
    add_car(24);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion25'])){
    add_car(25);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion26'])){
    add_car(26);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion27'])){
    add_car(27);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion28'])){
    add_car(28);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion29'])){
    add_car(29);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion30'])){
    add_car(30);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion31'])){
    add_car(31);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion32'])){
    add_car(32);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion33'])){
    add_car(33);
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ejecutarFuncion34'])){
    add_car(34);
}

?>