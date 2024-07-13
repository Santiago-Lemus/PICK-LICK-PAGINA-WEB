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
        <div id="products">
            <h1>GUITARRAS ELÉCTRICAS</h1>
            <p>Una buena guitarra eléctrica puede darnos desde una distorsión increíble hasta un sonido limpio excelente, aquí te tenemos nuestras opciones:</p>
            <div id="articles">
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas1.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/Fender_logo.png" alt="">
                </div>
                <a href="guitaele1.php" class="name">American Professional II Stratocaster®</a>
                <p class="priceacus">$10'749.000</p>
            </article>
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas2.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/fender.jpeg" alt="">
                </div>
                <a href="guitaele2.php" class="name">Michael Landau Coma Stratocaster®</a>
                <p class="priceacus">$15'199.000</p>
            </article>
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas3.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/Fender_logo.png" alt="">
                </div>
                <a href="guitaele3.php" class="name">American Ultra Telecaster®</a>
                <p class="priceacus">$13'199.000</p>
            </article>
            </div>
        </div>
        <div id="products">
            <div id="articles">
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas4.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/Fender_logo.png" alt="">
                </div>
                <a href="guitaele4.php" class="name">Kingfish Telecaster® Deluxe</a>
                <p class="priceacus">$13'999.000</p>
            </article>
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas5.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/fender.jpeg" alt="">
                </div>
                <a href="guitaele5.php" class="name">Kurt Cobain Jaguar®</a>
                <p class="priceacus">$8'749.000</p>
            </article>
            <article>
                <img class="imagepro" src="../IMG/Electricas/electricas6.jpg" alt="">
                <div class="fab">
                    <img class="by" src="../IMG/Fender_logo.png" alt="">
                </div>
                <a href="guitaele6.php" class="name">Johnny Marr Jaguar®</a>
                <p class="priceacus">$13'899.000</p>
            </article>
            </div>
            <div id="paginer">
                <p>1</p>
                <a href="electricas2.php">2</a>
                <a href="electricas3.php">3</a>
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