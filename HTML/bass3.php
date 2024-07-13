<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/stylesheet.css">
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
            <h1>Non-Reverse Thunderbird</h1>
            <p id="number">N.º de modelo: 0970110521</p>
        </div>
    <div id="thinks">
        <div id="container_slider">
            <div id="slider" class="slider"> <!--slider-->
                <div class="sli_section">
                    <img src="../IMG/bass3/bass1.png" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/bass3/bass2.png" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/bass3/bass3.png" alt="" class="sli_img">
                </div>
                <div class="sli_section">
                    <img src="../IMG/bass3/bass4.png" alt="" class="sli_img">
                </div>
            </div>
            <div id="btn_left" class="slider_btn"><i class="fa-solid fa-arrow-left"></i></i></div>
            <div id="btn_right" class="slider_btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <script src="../JS/slider.js"></script>
        <div id="contenide">
                <h2 class="infotittle">COLOR</h2>
                <p class="infotext">Inverness Green</p>
                <h2 class="infotittle">MATERIAL DEL DIAPASÓN</h2>
                <p class="infotext">Caoba</p>
                <h2 class="infotittle">FABRICANTE</h2>
                <img src="../IMG/Gibson-Logo.png" alt="" id="infoimage">
                <p id="infoprice">$11'949.000</p>
        </div>
    </div>
    <div id="description">
        <p id="descr">
            Desde que se lanzó por primera vez en 1965, Non-Reverse Thunderbird ha sido LA elección para los bajistas con visión de futuro que quieren abrir su propio camino y se niegan rotundamente a seguir a la multitud. El estilo distintivo y el tono enorme y atronador del Non-Reverse Thunderbird hacen que se destaque en el escenario y en el estudio. Ahora tienes la oportunidad de hacer tuyo uno de estos pájaros relativamente raros con el lanzamiento del nuevo Gibson USA Non-Reverse Thunderbird. Equipado con un cuerpo de caoba Non-Reverse y mástil de caoba con diapasón de palisandro y 20 trastes jumbo medianos, cada una de las dos pastillas Thunderbird tiene un control de volumen, lo que te permite usarlas por separado o mezclarlas en la cantidad que prefieras. Un control de tono maestro completa el diseño de control simple pero altamente efectivo. El golpeador blanco de tres capas presenta el icónico gráfico Thunderbird. El Thunderbird no inverso está equipado con una tuerca Graph Tech®. Un puente ajustable de 3 puntos proporciona una gama completa de ajustes para la acción y la entonación, mientras que los afinadores Hipshot® Ultralite® sujetan las cuerdas en el otro extremo y brindan una afinación precisa y estable mientras mantienen bajo el peso del clavijero para mejorar el equilibrio. Disponible en Inverness Green, Faded Pelham Blue y Sparkling Burgundy, se incluye un estuche rígido.
        </p>
        <div id="specific">
            <ul>
                <li>
                    <span>Forma del cuerpo</span>
                    <p>Non-Reverse Thunderbird</p>
                </li>
                <li>
                    <span>Material del cuerpo</span>
                    <p>Caoba</p>
                </li>
                <li>
                    <span>Material del brazo</span>
                    <p>Palorosa India</p>
                </li>
                <li>
                    <span>Número de trastes</span>
                    <p>20</p>
                </li>
                <li>
                    <span>Pastillas</span>
                    <p>Thunderbird</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="add">
        <form action="../PHP/agregar_carrito.php" method="post">
            <button name="ejecutarFuncion34" type="submit">Agregar al carrito  <i class="fa-solid fa-basket-shopping"></i></button>
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