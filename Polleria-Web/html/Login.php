<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - El Ruedo</title>
        <link href="../css/DiseñoLogin.css" rel="stylesheet" type="text/css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
    </head>

    <body>
        <header>
            <?php include 'cabecera.php'; ?>
        </header>
        <div class="wrapper">
            <form action="">
                <h1>INGRESAR</h1>
                <h2>Si has comprado antes en El Ruedo, solo ingresa tu correo electrónico y contraseña para acceder a tu cuenta.</h2>
                <div class="register-link">
                    <p>¿Aún no tienes cuenta? <a href="#">Registrarse aquí</a></p>
                </div>
                <div class="input-box">
                    <label for="email">CORREO ELECTRÓNICO *</label>
                    <input type="text" id="email" name="email"  required>
                </div>
                <div class="input-box">
                    <label for="password">CONTRASEÑA *</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" id="remember" name="remember"> Recuérdame</label>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit" class="btn">INGRESAR</button>

                <div class="through-back">
                    <span> O TAMBIEN </span>
                </div>

                <button type="submit" class="btnn">INGRESAR CON FACEBOOK</button>

            </form>
        </div>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
