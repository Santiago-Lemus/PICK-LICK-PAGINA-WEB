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
            <h1>American Ultra Luxe Stratocaster® Floyd Rose® HSS</h1>
            <p id="number">N.º de modelo: 0970713003</p>
        </div>
    <div id="thinks">
        <div id="container_slider">
            <div id="slider" class="slider"> <!--slider-->
                <div class="sli_section">
                    <img src="../IMG/guitaelec8/guita1.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec8/guita2.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec8/guita3.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec8/guita4.jpg" alt="" class="sli_img">
                </div>
            </div>
            <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
            <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <script src="../JS/slider.js"></script>
        <div id="contenide">
                <h2 class="infotittle">COLOR</h2>
                <p class="infotext">Mystic Black</p>
                <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                <p class="infotext">Palorosa</p>
                <h2 class="infotittle">FABRICANTE</h2>
                <img src="../IMG/Fender_logo.png" alt="" id="infoimage">
                <p id="infoprice">$14'449.000</p>
        </div>
    </div>
    <div id="description">
        <p id="descr">
            Para los músicos que buscan las mejores sensaciones de interpretación y sonido, aquí está la American Ultra, nuestra serie más sofisticada de guitarras y bajos. Con su vibrato Original Floyd Rose, sus trastes de acero inoxidable, atractivos acabados personalizados y pala pintada a juego, la American Ultra Luxe Stratocaster Floyd Rose HH es verdaderamente Ultra. Cuenta con un perfil de mástil en D" aumentado especial, bordes de diapasón ultra redondeados que brindan una comodidad de interpretación perfecta y un talón de mástil cónico que brinda fácil acceso a los agudos. Un diapasón de radio compuesto de 10 "-14" (254 mm - 355,6 mm) con 22 trastes medium-jumbo de acero inoxidable permite solos rápidos y precisos con facilidad, mientras que las pastillas Ultra Noiseless Hot™ de bobina simple y la humbucker Ultra Double Tap™ con varias opciones de cableado brindan infinitas posibilidades sónicas, sin ningún silbido. El vibrato Original Floyd Rose permite realizar vibratos precisos sin desafinos. El contorno trasero esculpido es tan funcional como espléndido . Este instrumento versátil y de alta gama es una verdadera fuente de inspiración que llevará tu interpretación a nuevas dimensiones. Se incluye un estuche rígido moldeado de primera calidad.
        </p>
        <div id="specific">
            <ul>
                <li>
                    <span>Forma del cuerpo</span>
                    <p>Stratocaster®</p>
                </li>
                <li>
                    <span>Material del cuerpo</span>
                    <p>Aliso</p>
                </li>
                <li>
                    <span>Material del brazo</span>
                    <p>Arce</p>
                </li>
                <li>
                    <span>Número de trastes</span>
                    <p>22</p>
                </li>
                <li>
                    <span>Pastillas</span>
                    <p>Ultra Double Tap™ Humbucking</p>
                    <p>Ultra Noiseless™ Hot Strat®</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="add">
        <form action="../PHP/agregar_carrito.php" method="post">
            <button name="ejecutarFuncion8" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
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