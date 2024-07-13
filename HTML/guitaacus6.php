<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
    <script src="../JS/visor.js"></script>
    <script defer src="../JS/nav_responsive.js"></script>
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <div id="container">
        <header id="header">
            <a href="../index.php"><img src="../IMG/Captura de pantalla 2023-03-20 100951.jpg" alt="Logotipo Web" id="logo"></a>
            <button class="toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <nav class="main-menu">
                <ul id="list">
                    <li>
                        <a href="../HTML/acusticas.php"></i>Acusticas</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../HTML/electricas.php"></i>Eléctricas</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../HTML/bajos.php"></i>Bajos</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../HTML/mantenimiento.php">Mantenimiento</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        <a href="../HTML/contacto.php">Contacto</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li id="shopcar">
                        <a href="../HTML/carshoping.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    <?php 
                        session_start();
                        include '../PHP/login-color2.php';
                        echo $icono_html;
                    ?>
                    </li>
                </ul>
            </nav>
        </header>

    <section id="content">
        <div id="tittle">
            <h1>Malibu Player</h1>
            <p id="number">N.º de modelo: 0970110521</p>
        </div>
    <div id="thinks">
        <div id="container_slider">
            <div id="slider" class="slider"> <!--slider-->
                <div class="sli_section">
                    <img src="../IMG/guitaracus6/guita1.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaracus6/guita2.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaracus6/guita3.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaracus6/guita4.jpg" alt="" class="sli_img">
                </div>
            </div>
            <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
            <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <script src="../JS/slider.js"></script>
        <div id="contenide">
                <h2 class="infotittle">COLOR</h2>
                <p class="infotext">Oro Artico</p>
                <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                <p class="infotext">Walnut</p>
                <h2 class="infotittle">FABRICANTE</h2>
                <img src="../IMG/Fender_logo.png" alt="" id="infoimage">
                <p id="infoprice">$1'899.000</p>
        </div>
    </div>
    <div id="description">
        <p id="descr">
            La verdadera creatividad requiere algo nuevo, algo así como el sonido inspirador y la sensación de la Malibu Player. La exclusiva escala corta y la forma de cuerpo pequeño le da una sensación ligeramente más" cómoda ", lo que anima a alcanzar nuevos acordes y melodías. También tiene un aspecto impresionante con una tapa de abeto maciza metálica brillante y aros y fondo de caoba, así como una pala de 6 en línea pintada a juego y un ribete crema que le da una actitud electrizante. El estilo audaz y el sonido equilibrado y articulado hacen de la Malibu Player un compañero natural en el escenario y en el estudio. La misma actitud de ningún compromiso que inyecta al músico la Malibu se extiende a todos los aspectos de su construcción. Cuenta con refuerzos internos optimizados para reducir la masa y para una resonancia superior, una cejilla y silleta de Graph Tech® NuBone® para un mayor sustain y un sistema de preamplificador Fishman® que hace que sea fácil de enchufar sin sacrificar el sonido natural de la guitarra. El mástil de caoba liviano presenta un perfil en forma de "C" cómodo, fácil de usar y de perfil delgado, adecuado para cualquier estilo de tocar, y su diapasón y puente de nogal aumentan aún más el tono vibrante de este instrumento. Con una excelente ergonomía, un aspecto distintivo y una inconfundible sensación Fender, la Malibu Player es un instrumento para una nueva generación de músicos intrépidos.
        </p>
        <div id="specific">
            <ul>
                <li>
                    <span>Forma del cuerpo</span>
                    <p>Malibu</p>
                </li>
                <li>
                    <span>Material del cuerpo</span>
                    <p>Caoba</p>
                </li>
                <li>
                    <span>Material del brazo</span>
                    <p>Caoba</p>
                </li>
                <li>
                    <span>Número de trastes</span>
                    <p>20</p>
                </li>
                <li>
                    <span>Controles</span>
                    <p>Volumen, graves, agudos</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="add">
        <form action="../PHP/agregar_carrito.php" method="post">
            <button name="ejecutarFuncion26" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
        </form>   
    </div>
    </section>

    <footer>
        <div id="notes">
            <h1>¡No te pierdas las nuevas noticias!</h1>
            <p>Se el primero en saber las nuevas noticias, promociones, productos y demás acerca del mundo de las guitarras</p>
            <form action="">
                <div id="send">
                    <input type="email" id="email" placeholder="Ingresa tu correo electrónico">
                    <input id="button" type="submit">
                </div>
            </form>
        </div>
        <div id="contact">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f" style="color: #000000;"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" style="color: #000000;"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter" style="color: #000000;"></i></a>
            <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok" style="color: #000000;"></i></a>
            <a href="https://open.spotify.com/?"><i class="fa-brands fa-spotify" style="color: #000000;"></i></a>
            <a href="https://co.pinterest.com/"><i class="fa-brands fa-pinterest-p" style="color: #000000;"></i></a>
        </div>

        <div id="final">
            <div id="sites">
                <h1>Contactanos</h1>
                <p><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>  Dirección: Cra7 # 25 - 46</p>
                <p><i class="fa-solid fa-city" style="color: #ffffff;"></i>  Ciudad: Bogotá, Colombia</p>
                <p><i class="fa-solid fa-phone" style="color: #ffffff;"></i>  Teléfono: 311-662-9671</p>
                <p><i class="fa-solid fa-envelope" style="color: #ffffff;"></i>  Correo: Pick&lick@gmail.com</p>
            </div>
        </div>

        <div id="credits">
            <p>@David Santiago Lemus. Copyright ©2023 Pick&Lick Musical Instruments.  All Rights Reserved.</p>
        </div>

    </footer>
</div>
    
</body>
</html>