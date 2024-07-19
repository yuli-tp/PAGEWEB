<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/usuario.css">
    <title>Brosso Chicken</title>
    <link rel="icon" type="image/icon" href="images/images__1_-removebg-preview.png">

</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="php/login_usuario_be.php" class="sign-in-form" method="post">
                    <h2 class="title">Iniciar sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario" name="usuario">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                    </div>
                    <input type="submit" value="Iniciar sesión" class="btn solid">
                    <p class="social-text">O inicia sesión en la plataforma social</p>
                
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="php/registro_usuario.php" class="sign-up-form" method="post">
                    <h2 class="title">Inscríbete</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de usuario" name="usuario">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="correo">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contrasena">
                    </div>
                    <input type="submit" value="Crear sesión" class="btn solid">
                    <p class="social-text">O inscríbete en la plataforma social</p>
                
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">

            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Eres nuevo miembro de Brosso Chicken?</h3>
                    <p>Sé miembro de la pollería Brosso Chicken, únete a nosotros como nuestra familia.</p>
                    <button class="btn transparent" id="sign-up-btn">Inscríbete</button>
                </div>

                <img src="images/Sign_up-removebg-preview.png" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Eres miembros de Brosso Chicken?</h3>
                    <p>Inicia sesión como miembro de Brosso Chicken.</p>
                    <button class="btn transparent" id="sign-in-btn">Inicia sesión</button>
                </div>
                <img src="images/Sign_in-removebg-preview.png" class="image" alt="">
            </div>

        </div>
    </div>
    <script src="js/usuario.js"></script>
</body>
</html>