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
            <h1>Michael Landau Coma Stratocaster®</h1>
            <p id="number">N.º de modelo: 0970713003</p>
        </div>
    <div id="thinks">
        <div id="container_slider">
            <div id="slider" class="slider"> <!--slider-->
                <div class="sli_section">
                    <img src="../IMG/guitaelec2/guita1.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec2/guita2.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec2/guita3.jpg" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/guitaelec2/guita4.jpg" alt="" class="sli_img">
                </div>
            </div>
            <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
            <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <script src="../JS/slider.js"></script>
        <div id="contenide">
                <h2 class="infotittle">COLOR</h2>
                <p class="infotext">Madera Rojiza</p>
                <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                <p class="infotext">Aliso</p>
                <h2 class="infotittle">FABRICANTE</h2>
                <img src="../IMG/Fender_logo.png" alt="" id="infoimage">
                <p id="infoprice">$15'199.000</p>
        </div>
    </div>
    <div id="description">
        <p id="descr">
            La versión de Coma recreada en la colección Fender® Stories representa la guitarra tal como existe ahora. La electrónica incluye pastillas ML Ultra Noiseless Strat® diseñadas a medida para el mástil y el medio y una pastilla humbucker Wide Range personalizada en la posición del puente. El hardware incluye un trémolo Stratocaster de estilo vintage de 6 tornillos con un bloque de acero laminado en frío, un mástil personalizado con especificaciones ML, clavijero Fender ClassicGear™ y el característico cuerpo de laca satinada roja desteñida con una cavidad para Floyd Rose®. La Michael Landau Coma Stratocaster muestra su rica historia a la vista, representando verdaderamente a un artista vital que siempre está en transición. En el estuche rígido personalizado con el bordado de Coma se incluyen un juego de calcomanías "Coma", una correa personalizada y un folleto de Coma escrito por el propio Michael.
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
                    <p>21</p>
                </li>
                <li>
                    <span>Pastillas</span>
                    <p>Custom ML Ultra Noiseless™ Single-Coil Strat®</p>
                    <p>Custom ML CuNiFe® Wide-Range Humbucker</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="add">
        <form action="../PHP/agregar_carrito.php" method="post">
            <button name="ejecutarFuncion2" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
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