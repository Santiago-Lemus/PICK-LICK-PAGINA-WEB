<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../PICK & LICK - PÁGINA WEB/IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../PICK & LICK - PÁGINA WEB/CSS/stylesheet.css">
    <script defer src="../PICK & LICK - PÁGINA WEB/JS/nav_responsive.js"></script>
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <div id="container">
    <header id="header">
        <a href="index.php"><img src="../PICK & LICK - PÁGINA WEB/IMG/Captura de pantalla 2023-03-20 100951.jpg" alt="Logotipo Web" id="logo"></a>
        <button class="toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <nav class="main-menu">
            <ul id="list">
                <li>
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/acusticas.php"></i>Acusticas</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/electricas.php"></i>Eléctricas</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/bajos.php"></i>Bajos</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/mantenimiento.php">Mantenimiento</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/contacto.php">Contacto</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li id="shopcar">
                    <a href="../PICK & LICK - PÁGINA WEB/HTML/carshoping.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    <?php 
                        session_start();
                        include 'PHP/login-color.php';
                        echo $icono_html;
                    ?>
                </li>
            </ul>
        </nav>
    </header>

    <section id="content">
        <div id="big">
            <h1>DA TUS PRIMEROS PASOS</h1>
            <h2>Te enseñamos desde lo más básico a lo más complejo, para que seas todo un guitarrista completo</h2>
            <a href="../PICK & LICK - PÁGINA WEB/HTML/tutorial.php">Ver más  <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div id="dates">
            <div class="minidate">
                <div class="minilogo">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="order">
                    <h2>Envíos</h2>
                    <p>Envíos nacionales a todo el país</p>
                </div>
            </div>
            <div class="minidate">
                <div class="minilogo">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <div class="order">
                    <h2>Contacto</h2>
                    <p>Contacto a nivel Colombia</p>
                </div>
            </div>
            <div class="minidate">
                <div class="minilogo">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="order">
                    <h2>Garantía</h2>
                    <p>Compras 100% seguras</p>
                </div>
            </div>
            <div class="minidate">
                <div class="minilogo">
                    <i class="fa-solid fa-shop"></i>
                </div>
                <div class="order">
                    <h2>Puntos</h2>
                    <p>Visita todas nuestras sucursales</p>
                </div>
            </div>
        </div>

        <div id="products">
            <h1>PROMOCIONES DE LA SEMANA</h1>
            <p>Semanalmente te ofrecemos diferentes ofertas para que puedas adquirir nuevos productos ¡Aquí tenemos algunas para tí!</p>
            <div id="articles">
            <article>
                <img class="imagepro" src="../PICK & LICK - PÁGINA WEB/IMG/guitar fender.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../PICK & LICK - PÁGINA WEB/IMG/fender.jpeg" alt="">
                </div>
                <a href="../PICK & LICK - PÁGINA WEB/HTML/guitaele19.php" class="name">Vintera® '60s Jazzmaster® Modified</a>
                <p class="price">$5'500.000</p>
                <p class="lastprice">$6'640.000</p>
            </article>
            <article>
                <img class="imagepro" src="../PICK & LICK - PÁGINA WEB/IMG/guitar tele.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../PICK & LICK - PÁGINA WEB/IMG/fender.jpeg" alt="">
                </div>
                <a href="../PICK & LICK - PÁGINA WEB/HTML/guitaele20.php" class="name">Gold Foil Telecaster®</a>
                <p class="price">$6'200.000</p>
                <p class="lastprice">$7'000.000</p>
            </article>
            <article>
                <img class="imagepro" src="../PICK & LICK - PÁGINA WEB/IMG/guitar meteora.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../PICK & LICK - PÁGINA WEB/IMG/fender.jpeg" alt="">
                </div>
                <a href="../PICK & LICK - PÁGINA WEB/HTML/guitaele21.php" class="name">Player Plus Meteora® HH</a>
                <p class="price">$5'000.000</p>
                <p class="lastprice">$5'750.000</p>
            </article>
            </div>
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