<!doctype html>
<html lang="es">
  <head>
    <title>|Hugo Sajama|</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--Cargando fuentes de google-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="js/bootstrap.js">
    </head>
  <body>

    <section class="container-header">

      <header class=" encabezado navbar-fixed-top" role="banner">
        <div class="container">
            <a href="index.php" class="logo">
              <img src="images/hs-logo.png" alt="Logo del sitio">
            </a>
            <button type="button" name="button" class="boton-buscar" data-toogle ="collapse"
             data-target ="bloque-buscar" aria-expanded ="false">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <button type="button" name="button" class="boton-menu">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <form action="index.php" method="get" id="bloque-buscar" class="collapse">
                <div class="contenedor-bloque-buscar">
                    <input type="text" name="" value="" placeholder="Buscar...">
                    <input type="submit" name="" value="Buscar">
                </div>
            </form>

            <nav id="menu-principal" class="collapse">
                <ul>
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li><a href="ingresar.php">Ingresar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                </ul>
            </nav>
          </div>
      </header>

      <div class="banner-principal">
          <h1>Hugo Sajama Store</h1>
          <p>aca poner un subtitulo de aprox dos lineas</p>
          <a href="articulos.html">Ver Articulos</a>

      </div>
      <div class="flecha-bajar">
          <a href="#categorias">Boton Bajar</a>
      </div>
    </section>

    <section class="descripcion text-center" id="categorias">
        <h2>Aca va un subtitulo de las categorias</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <section class="tu-mejor-eleccion">
      <h2>¿Por que somos <span>tu mejor elección?</span></h2>
      <p>pequeño parrafo de por que es mejor comprar en nuestra tienda online</p>
      <ul>
        <li>
          <img src="images/iconfinder/carrito.png" alt="">
          <h4>Carrito</h4>
        </li>
        <li>
          <img src="images/iconfinder/delivery.png" alt="">
          <h4>Envios a todo el país</h4>
        </li>
        <li>
          <img src="images/iconfinder/sales.png" alt="">
          <h4>Sales</h4>
        </li>
      </ul>

      <ul>
        <li>
          <img src="images/iconfinder/hombre-mujer.png" alt="">
          <h4>Tendencias</h4>
        </li>
        <li>
          <img src="images/iconfinder/tarjeta.png" alt="">
          <h4>Pagos Online</h4>
        </li>
        <li>
          <img src="images/iconfinder/remera.png" alt="">
          <h4>Cambios</h4>
        </li>
      </ul>
    </section>

    <main class="categorias">
      <h2>Categorias</h2>
      <article>
        <img src="images/iconfinder/categorias.png" alt="Otoño.invierno">
        <h3>Otoño - Invierno</h3>
      </article>
      <article>
        <img src="images/iconfinder/categorias.png" alt="Primavera-verano">
        <h3>Primavera - Verano</h3>
      </article>
      <article>
        <img src="images/iconfinder/categorias.png" alt="Hombre">
        <h3>Hombre</h3>
      </article>
      <article>
        <img src="images/iconfinder/categorias.png" alt="Mujer">
        <h3>Mujer</h3>
      </article>
      <article>
        <img src="images/iconfinder/categorias.png" alt="Niños">
        <h3>Niños</h3>
      </article>
    </main>

    <section class="ofertas">
      <h2>Ofertas Imperdibles</h2>
      <h4>Colocar un subtitulo</h4>
      <a href="#">
        <h4></h4>
        <img src="" alt=""><!--Aca van los articulos con hipervinculos-->
      </a>

    </section>

    <?php // NOTE: Footer ?>

    <footer>
       <div class="footer-wrapper">
          <div class="contenido">
             <div class="cabecera">
                <img class="logo"src="images/hs-logo.png" alt="">
                <div class="links-terminos">
                   <a href="#">Terminos y condiciones</a>
                   <a href="#">Preguntas Frecuentes</a>

                </div>

             </div>
          </div>
          <div class="columnas-footer">
             <article class="col-izquierda">
                <span><h3>AYUDA</h3></span>
                <ul>
                   <li><a href="#">Soporte</a></li>
                   <li><a href="nosotros.php">Acerca de Nosotros</a></li>
                   <li><a href="#">Contacto</a></li>
                   <li><a href="#">Otro Item</a></li>
                </ul>
             </article>

             <article class="col-derecha">
                <span><h3>Redes Sociales</h3></span>
                <ul>
                   <li><a href="#">Facebook</a></li>
                   <li><a href="#">Twitter</a></li>
                   <li><a href="#">E-mail</a></li>
                </ul>
             </article>

          </div>

          <hr class="linea-footer"/>
          <p>Proyecto <a href="http://www.digitalhouse.com"> Digital House</a> Por Nadina, Hugo y Leonel<br><br>© 2017 Hugo Sajama - Todos los derechos reservados.</p>

       </div>

     </footer>
     <a href="ir-arriba"> Ir arriba</a>
</body>
</html>
