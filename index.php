<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "usuario.php";
        </script>
    ';
    session_destroy();
    die();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brosso Chicken</title>
    <link rel="icon" type="image/icon" href="images/images__1_-removebg-preview.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="images/images__1_-removebg-preview.png" alt="">
            <span>Brosso Chicken</span>
        </a>

        <nav class="navbar">
                <a href="index.php">Inicio</a>
                <a href="menu.html">Menú</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="blogs.html">Blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-circle-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-right-to-bracket" id="cerrar-btn"></div>
        </div>

        <form action="php/busqueda.php" method="post" class="search-form">
            <input type="search" id="search-box" name="search" placeholder="Buscar productos...">
            <button type="submit">
                <label for="search-box" class="fa fa-search"></label>
            </button>
        </form>

    </header>

<!--inicio-->

    <section class="inicio" id="inicio">
      <div class="content">
          <h3>Descubre todo lo que tenemos para ti</h3>
          <p>Pollo a la brasa, papas fritas, chaufita, nuestras ensaladas y mucho más.</p>

          <a href="menu.html" class="btn">Compra ahora</a>
      </div>
  </section>

<!--inicio-->

<!--actividades-->
<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="images/f1.png" alt="">
        <h6>Envío gratis</h6>
    </div>

    <div class="fe-box">
        <img src="images/f2.png" alt="">
        <h6>Pedido virtual</h6>
    </div>

    <div class="fe-box">
        <img src="images/f3.png" alt="">
        <h6>Ahorra dinero</h6>
    </div>

    <div class="fe-box">
        <img src="images/f4.png" alt="">
        <h6>Promociones</h6>
    </div>

    <div class="fe-box">
        <img src="images/f5.png" alt="">
        <h6>Feliz compra</h6>
    </div>
</section>

<!--footer-->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3><img src="images/images__1_-removebg-preview.png" alt="">  Brosso Chicken </h3>
            <hr><hr>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100063678271239&mibextid=ZbWKwL" class="fa-brands fa-facebook"></a>
                <a href="https://www.google.com/maps/place/Poller%C3%ADa+Centro+Hist%C3%B3rico+Brosso/@-13.5193487,-71.981334,17z/data=!3m1!4b1!4m6!3m5!1s0x916dd72c11b703d9:0x304a933db4c2e203!8m2!3d-13.5193487!4d-71.9787591!16s%2Fg%2F1thf9mnw?hl=es-PE&entry=ttu#:~:text=https%3A//maps.app.goo.gl/zxH9TbzJoC3a3UaA8" class="fas fa-location-dot"></a>
                <a href="http://wa.me/51984054080" class="fa-brands fa-whatsapp"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contacto</h3>
            <a href="#" class="links"><i class="fas fa-phone"></i> +51 984054080</a>
            <a href="#" class="links"><i class="fas fa-envelope"></i>chickenbrosso@gmail.com</a>
            <a href="#" class="links"><i class="fas fa-map-marker"></i>Calle San Andres 221-225, Cusco, Perú</a>
        </div>

        <div class="box">
            <h3>Enlaces</h3>
            <a href="index.php" class="links"><i class="fas fa-arrow-right"></i>Inicio</a>
            <a href="menu.html" class="links"><i class="fas fa-arrow-right"></i>Menú</a>
            <a href="nosotros.html" class="links"><i class="fas fa-arrow-right"></i>Nosotros</a>
            <a href="blogs.html" class="links"><i class="fas fa-arrow-right"></i>Blogs</a>
        </div>

        <div class="box">
            <h3>Métodos de pago</h3>
            <img src="images/pay.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit">&copy; 2024 Brosso Chicken. Todos los derechos reservados.</div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/inicio.js"></script>
</body>
</html>