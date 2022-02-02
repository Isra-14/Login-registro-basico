<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- // ! CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- // ! FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Raleway:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <title>Iniciar sesion</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar sesion</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contrase&ntilde;a">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
        </form>
        <p class="texto-registrate">
            ¿ Aun no tienes cuenta ?
            <a href="registro.php">Registrate</a>
        </p>
    </div>
</body>
</html>