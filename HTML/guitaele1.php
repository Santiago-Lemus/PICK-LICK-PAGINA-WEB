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
                <h1 id="guitar_name">AMERICAN PROFESSIONAL II STRATOCASTER®</h1>
                <p id="number">N.º de modelo: 0113900705</p>
            </div>
            <div id="thinks">
                <div id="container_slider">
                    <div id="slider" class="slider"> <!--slider-->
                        <div class="sli_section">
                            <img src="../IMG/guitaelec1/guitar1.jpg" alt="" class="sli_img">
                        </div>
                        <div class="sli_section">
                            <img src="../IMG/guitaelec1/guitar2.jpg" alt="" class="sli_img">
                        </div>
                        <div class="sli_section">
                            <img src="../IMG/guitaelec1/guitar3.jpg" alt="" class="sli_img">
                        </div>
                        <div class="sli_section">
                            <img src="../IMG/guitaelec1/guitar4.jpg" alt="" class="sli_img">
                        </div>
                    </div>
                    <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
                    <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                <script src="../JS/slider.js"></script>
                <div id="contenide">
                    <h2 class="infotittle">COLOR</h2>
                    <p class="infotext">Blanco Olímpico</p>
                    <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                    <p class="infotext">Palisandro</p>
                    <h2 class="infotittle">FABRICANTE</h2>
                    <img src="../IMG/Fender_logo.png" alt="" id="infoimage">
                    <p id="infoprice">$10'749.000</p>
                </div>
            </div>
            <script src="/JS/inv_guitar.js"></script>
            <div id="description">
                <p id="descr">
                    La American Professional II Stratocaster® se basa en más de sesenta años de innovación, inspiración
                    y evolución para satisfacer las demandas del músico de hoy en día. Nuestro popular mástil “Deep C"
                    ahora tiene bordes de diapasón redondeados, un acabado satinado "Super-Natural" y un talón de mástil
                    recién esculpido para una sensación sumamente cómoda y de fácil acceso al registro superior. Las
                    nuevas pastillas de bobina simple V-Mod II Stratocaster son más articuladas que nunca y conservan la
                    calidez y el timbre de campana. Un trémolo mejorado de 2 puntos con un bloque de acero laminado en
                    frío aumenta el sustain, la claridad y el brillo de alta gama. La American Pro II Stratocaster tiene
                    al sonido y sensación clásicos pero con amplias mejoras que se suman a las habituales para marcar un
                    nuevo estándar para instrumentos profesionales.
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
                            <p>V-Mod II Single-Coil Strat®</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="add">
                <form action="../PHP/agregar_carrito.php" method="post">
                    <button name="ejecutarFuncion1" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
                </form>
            </div>
        </section>

        <footer>
            <div id="notes">
                <h1>¡No te pierdas las nuevas noticias!</h1>
                <p>Se el primero en saber las nuevas noticias, promociones, productos y demás acerca del mundo de las
                    guitarras</p>
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
                <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"
                        style="color: #000000;"></i></a>
                <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok" style="color: #000000;"></i></a>
                <a href="https://open.spotify.com/?"><i class="fa-brands fa-spotify" style="color: #000000;"></i></a>
                <a href="https://co.pinterest.com/"><i class="fa-brands fa-pinterest-p" style="color: #000000;"></i></a>
            </div>

            <div id="final">
                <div id="sites">
                    <h1>Contactanos</h1>
                    <p><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Dirección: Cra7 # 25 - 46</p>
                    <p><i class="fa-solid fa-city" style="color: #ffffff;"></i> Ciudad: Bogotá, Colombia</p>
                    <p><i class="fa-solid fa-phone" style="color: #ffffff;"></i> Teléfono: 311-662-9671</p>
                    <p><i class="fa-solid fa-envelope" style="color: #ffffff;"></i> Correo: Pick&lick@gmail.com</p>
                </div>
            </div>

            <div id="credits">
                <p>@David Santiago Lemus. Copyright ©2023 Pick&Lick Musical Instruments.  All Rights Reserved.</p>
            </div>

        </footer>
    </div>

</body>

</html>