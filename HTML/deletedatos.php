<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../IMG/Loguito simple.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/94aca8a7d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/carshoping.css">
    <link rel="stylesheet" href="../../PICK & LICK - PÁGINA WEB/CSS/stylesheet.css">
    <title>PICK & LICK STORE | Tienda de instrumentos de cuerda</title>
</head>
<body>
    <section id="login-content">
        <div class="login-container">
            <h2>Actualización de tablas</h2>
            <form action="../PHP/updatedatos.php" method="POST">
                <p class="login-inp">
                    <label for="username">Selecciona la tabla que desea modificar</label>
                    <select name="tabla" id="delete_tabla_options">
                        <option value="cargos">CARGOS</option>
                        <option value="clientes">CLIENTES</option>
                        <option value="empleados">EMPLEADOS</option>
                        <option value="proveedores">PROVEEDORES</option>
                    </select>
                </p>
                <div id="register-bottons">
                    <input type="submit" value="SIGUIENTE" id="register-submit">
                </div>
            </form>
        </div>
    </section>
</body>
</html>