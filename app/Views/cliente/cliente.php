<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../../../public/js/script.js"></script>
    <link rel="stylesheet" href="../../../public/css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
        <div class="Faro_fondo">

        
        <img src="../../../public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png" alt=""class="logo">
        <div class="login-container-cliente">
            <h2>Iniciar Sesión (Cliente)</h2>
            <form id="loginFormCliente" action="cliente_login.php" method="POST">
                <input type="text" name="username" placeholder="Nombre de Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" onclick="window.location.href='entornocliente.php';">Iniciar Sesión</button>
                <button type="button" onclick="window.location.href='../index.php';">Regresar</button>
            </form>

        </div>



</body>
</html>