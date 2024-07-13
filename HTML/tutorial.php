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
        <div id="workshop">
            <h1>Guía básica para empezar a tocar guitarra</h1>
            <p>A veces, el mejor camino que tiene una persona al interesarse en tocar la guitarra es aprender por sus propios medios, no es que sea lo más recomendable, pero tampoco es un hecho imposible, todo lo contrario, aprender a tocar la guitarra puede ser fácil si solo pones de tu parte y practicas con frecuencia. <br><br> Lo primero que debes tener en consideración es que todo el avance que puedas conseguir dependerá siempre de ti, podrás incluso tener clases particulares con músicos profesionales, pero si no pones en práctica durante el día todo lo aprendido, el avance será lento.</p>
            <div id="jobs">
            <h2>Recomendaciones para aprender a tocar guitarra</h2>
            <p>La primera    recomendación es apartar un tiempo diario para la práctica, puede ser entre una o dos horas, durante ese tiempo puedes realizar una y otra vez cada lección aprendida, hasta el punto de que lo puedas ejecutar con completa facilidad y destreza.</p>
            <p>Por otra parte, también entendemos que quizás hayas invertido todos tus ahorros en la compra de una guitarra y no tengas el capital suficiente para pagar lecciones sobre cómo tocar la guitarra, en nuestros días, cada lección cuesta mucho dinero.</p>
            <p>Otro punto importante a destacar es que, en la mayoría de los casos, los instructores no toman en cuenta el estilo de música que les guste a sus alumnos y solamente enseñan lo que ellos quieren que toquen, no es que esté del todo mal, pero para algunos principiantes puede llegar a ser un poco frustrante</p>
            <p>Un buen instructor siempre puede ser gran ayuda, pero tú también puedes hacer que el proceso de aprendizaje sea más rápido, cuando aprender guitarra sea tu principal objetivo y trabajes duro para lograrlo.</p>
            <p>Asimismo, debes asimilar que el hecho de cometer constantes errores, no quiere decir que no estés avanzando, que cada día sirva para que te enfoques más en lo que quieres alcanzar. Es común en todos los principiantes que quieran aprender a tocar la guitarra de la noche a la mañana, o quieran tocar a la perfección los temas de sus estrellas favoritas en poco tiempo, pero para lograrlo se requiere de muchas horas de práctica.</p>
            <p>En ese sentido, hemos desarrollado ciertas herramientas que te ayudarán a aprender a tocar la guitarra por tus propios medios o si lo prefieres, ser como una especie de guía complementaria para lo que aprendas en clases.</p>
            <h2>Link de interés</h2>
            <a href="https://youtu.be/ENeSd1qYv9Q" target="_blank" class="tutorial-link"><i class="fa-brands fa-youtube"></i>  Lista de reproducción Youtube</a>
            <a href="https://www.fender.com/online-guitar-tuner" target="_blank" class="tutorial-link"><i class="fa-solid fa-guitar"></i>  Afinador de guitarra web por Fender</a>
            <a href="../DOC/Guía.pdf" download=""><i class="fa-regular fa-file" id="tutorial-file"></i>  Guía PDF</a>
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