<?php
    if(isset($_SESSION['usr_user'])){
        $icono_html = '<a href="../HTML/login.php"><i class="fa-solid fa-user" id="login-logoon"></i></a>';
    }else{
        $icono_html = '<a href="../HTML/login.php"><i class="fa-solid fa-user" id="login-logooff"></i></a>';
    }
?>