<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <script src="../JS/message.js"></script>
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
        <div id="sendus">
            <div id="message">
                <h1>Envíanos un mensaje</h1>
                <form action="../PHP/enviar_mensaje.php" method="POST">
                    <input type="text" placeholder="Nombre" name="nombre" id="mess_name">
                    <input type="text" placeholder="Email" name="email" id="mess_email">
                    <textarea name="mensaje" id="Textarea" cols="30" rows="10" placeholder="Dejanos tu mensaje"></textarea>
                    <div id="options">
                        <input class="opsend" type="submit">
                        <input class="opsend" type="reset">
                    </div>
                    <p>¡Gracias por tu mensaje! Pronto lo contestaremos por vía correo electrónico</p>
                </form>
            </div>
            <div id="back">
                <h1>Información de contacto</h1>
                <div id="backinfo">
                    <div class="backdate">
                        <p class="backlogo"><i class="fa-solid fa-location-dot" style="color: #000000;"></i></p>
                        <div class="backminiinfo">
                            <h2>Nuestro Punto Principal</h2>
                            <p>Cra7 # 25 - 46 <br> Bogotá, Colombia</p>
                        </div>
                    </div>
                </div>
                <div id="backinfo">
                    <div class="backdate">
                        <p class="backlogo"><i class="fa-regular fa-clock" style="color: #000000;"></i></p>
                        <div class="backminiinfo">
                            <h2>Horario de atención</h2>
                            <p>L - V: 10:00 A.M. - 7:00 P.M. <br> S - F: 10:00 A.M. - 2:00 P.M. </p>
                        </div>
                    </div>
                </div>
                <div id="backinfo">
                    <div class="backdate">
                        <p class="backlogo"><i class="fa-regular fa-comment" style="color: #000000;"></i></i></p>
                        <div class="backminiinfo">
                            <h2>Números de atención</h2>
                            <p>311-662-9671 <br> 601-452-8586</p>
                        </div>
                    </div>
                </div>
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