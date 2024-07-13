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
            <h1>CD-60 DREADNOUGHT V3 DS</h1>
            <p id="number">N.º de modelo: 0970110521</p>
        </div>
    <div id="thinks">
        <div id="container_slider">
            <div id="slider" class="slider"> <!--slider-->
                <div class="sli_section">
                    <img src="../IMG/guitaacus5/guita1.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaacus5/guita2.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaacus5/guita3.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaacus5/guita4.jpg" alt="" class="sli_img">
                </div>
            </div>
            <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
            <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <script src="../JS/slider.js"></script>
        <div id="contenide">
                <h2 class="infotittle">COLOR</h2>
                <p class="infotext">Natural</p>
                <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                <p class="infotext">Walnut</p>
                <h2 class="infotittle">FABRICANTE</h2>
                <img src="../IMG/Fender_logo.png" alt="" id="infoimage">
                <p id="infoprice">$849.000</p>
        </div>
    </div>
    <div id="description">
        <p id="descr">
            Si eres un guitarrista principiante, la mejor elección que puedes hacer es conseguir una guitarra con un sonido y una sensación que te inspire a seguir tocando. El CD-60 es un Fender genuino que es asequible y viene en tres acabados atractivos para combinar con tu estilo. Proporciona un tono bien equilibrado y mucho volumen gracias a su estilo de cuerpo acorazado y su tapa de abeto con varetaje en "X" festoneado. El CD-60 también es una excelente opción para los músicos veteranos que necesitan un segundo modelo acorazado económico.
        </p>
        <div id="specific">
            <ul>
                <li>
                    <span>Forma del cuerpo</span>
                    <p>Acorazada</p>
                </li>
                <li>
                    <span>Material del cuerpo</span>
                    <p>Caoba laminada</p>
                </li>
                <li>
                    <span>Material del brazo</span>
                    <p>Caoba</p>
                </li>
                <li>
                    <span>Número de trastes</span>
                    <p>20</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="add">
        <form action="../PHP/agregar_carrito.php" method="post">
            <button name="ejecutarFuncion25" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
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