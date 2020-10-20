<?php $pagina = "Inicio"; ?>

<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include_once "layout/archivos_header.php" ?>


  <title> Andrés Duque / <?php echo $pagina ?> </title>

</head>

<body>

  <!-- Menú -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> </span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-sm-auto mx-auto">

        <li class="nav-item <?php if ($pagina == "Inicio") {
                              echo "active";
                            } ?>">
          <a class="nav-link" href="index.php">Inicio </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if ($pagina == "Curriculum") {
                                echo "active";
                              } ?>" href="curriculum.php"> Curriculum </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  <?php if ($pagina == "Proyectos") {
                                echo "active";
                              } ?> " href="#proyectos"> Proyectos </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  <?php if ($pagina == "Sobre mi") {
                                echo "active";
                              } ?> " href="#sobre_mi">Sobre mi</a>
        </li>


      </ul>

    </div>

  </nav>
  <!--  -->

  <!-- Vista Principal -->
  <section id="vista_principal" class="d-flex flex-wrap">

    <div class="col-6 p-0 m-0 d-none d-lg-block d-xl-block">
      <img class="imagenes_fondo" src="img/desarrollador2.jpg" alt="">
    </div>

    <div class="col-12 col-lg-6 col-xl-6 p-0 m-0">
      <img class="imagenes_fondo" src="img/desarrollador.jpg" alt="">
    </div>

    <div id="circulo_perfil">
      <img class="imagen_perfil w-100 h-auto" src="img/user.jpg" alt="">
    </div>

    <h6 class="desarrollador"> Desarrollador full stack </h6>

  </section>
  <!--  -->


  <!-- Botones de contratame -->
  <div class="d-flex mt-4 flex-wrap align-items-center justify-content-center">


    <!-- Boton contratame -->
    <div class="padre_boton position-relative">
      <a href="#" class="text-center boton position-relative w-100 h-100" data-toggle="modal" data-target="#contratame">Contrátame</a>
    </div>
    <!--  -->

    <!-- Boton ver CV -->
    <div class="ml-3 padre_boton position-relative">
      <a target="_blank" href="#" class="text-center boton position-relative w-100 h-100">Ver CV</a>
    </div>
    <!--  -->

  </div>
  <!--  -->

  <!-- Acerca de mi -->
  <section id="sobre_mi" class="container mt-5 d-flex overflow-hidden align-items-center justify-content-center flex-wrap">

    <div class="imagen_presentacion col-12 col-lg-6 col-xl-6">

      <img class="w-100" src="img/sobre_mi.png" alt="Sobre mi">

    </div>

    <div class="texto_presentacion col-12 col-lg-6 col-xl-6">

      <h2 class="cursive text-center font-weight-bold"> Déjame presentarme </h2>





      <p class="mt-5 text-justify"> Mi nombre es Andrés, actualmente tengo 21 años, soy desarrollador Web desde hace 2 años y desde hace medio año empecé como free lancer (Desarrollador independiente). </p>

      <p class="text-justify "> Algo que siempre me ha caracterizado es el ser autodidacta, gracias a ello he podido aprender mucho en lo que me apasiona, la informática. Mi objetivo es brindar un servicio aplicando siempre buenas practicas, empeño y por sobre todo entusiasmo por lo que hago, a cada trabajo le empleo un 110% para realizar un trabajo excelente. </p>

    </div>

  </section>
  <!--  -->

  <!-- Habilidades -->
  <h2 class="cursive text-center font-weight-bold mt-5"> Mis habilidades </h2>

  <section class="mt-5 container d-flex flex-wrap">

    <!-- HTML 5 -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-html5 mr-2"></i>
        <h6 class="text-center"> HTML 5 (90%) </h6>

      </div>

      <div class="progress">
        <div id="html" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->

    <!-- CSS -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-css3-alt mr-2"></i>
        <h6 class="text-center"> CSS (90%) </h6>

      </div>

      <div class="progress">
        <div id="css" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->

    <!-- Javascript -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-js-square mr-2"></i>
        <h6 class="text-center"> Javascript (70%) </h6>

      </div>

      <div class="progress">
        <div id="js" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->

    <!-- PHP -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-php mr-2"></i>
        <h6 class="text-center"> PHP (70%) </h6>

      </div>

      <div class="progress">
        <div id="php" class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->

    <!-- SASS -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-sass mr-2"></i>
        <h6 class="text-center"> SASS (95%) </h6>

      </div>

      <div class="progress">
        <div id="sass" class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->

    <!-- BOOTSTRAP -->
    <div class="col-12 col-lg-6 col-xl-6 mb-5">

      <div class="d-flex w-100 align-items-baseline justify-content-center">

        <i class="fab fa-bootstrap mr-2"></i>
        <h6 class="text-center"> Bootstrap (80%) </h6>

      </div>

      <div class="progress">
        <div id="bootstrap" class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

    </div>
    <!--  -->


  </section>
  <!--  -->


  <!-- Servicios ofrecidos -->
  <section class="container mt-5">

    <h2 class="cursive text-center font-weight-bold"> Servicios que ofrezco </h2>

    <div class="my-5 d-flex flex-wrap align-items-start justify-content-center">

      <div class="caja_iconos col-12 col-lg-3 col-xl-3 d-flex flex-column align-items-center justify-content-lg-start justify-content-xl-start justify-content-center">
        <img class="my-2 i_servicios" src="img/sitio_web.png" alt="">
        <h6 class="font-italic text-center"> Diseño y desarrollo de páginas Web </h6>
        <p class="text-center"> Diseño y desarrollo de páginas Web profesionales que se adaptan a las necesidades de tu negocio. Paginas 100% responsive, intuitivas y rápidas, así como la que estas viendo. </p>
      </div>

      <div class="caja_iconos col-12 col-lg-3 col-xl-3 d-flex flex-column align-items-center justify-content-lg-start justify-content-xl-start justify-content-center">
        <img class="my-2 i_servicios" src="img/supervision.png" alt="">
        <h6 class="font-italic text-center"> Mantenimiento de equipos de computo </h6>
        <p class="text-center"> Diagnostico y mantenimiento de equipos computacionales. Actualización de sistemas operativos, análisis en busca de fallas o defectos, entre otros... </p>
      </div>

      <div class="caja_iconos col-12 col-lg-3 col-xl-3 d-flex flex-column align-items-center justify-content-lg-start justify-content-xl-start justify-content-center">
        <img class="my-2 i_servicios" src="img/pc.png" alt="">
        <h6 class="font-italic text-center"> Montar PC para trabajo u oficina </h6>
        <p class="text-center"> Tanto si buscas un computador para edición, trabajo o simplemente para jugar, puedo ayudarte a buscar los componentes perfectos para ti y entregarte tu computador listo para trabajar. </p>
      </div>

    </div>

  </section>
  <!--  -->


  <!-- Proyectos -->
  <section id="proyectos" class="container">

    <h2 class="my-5 cursive text-center font-weight-bold"> Algunos de mis proyectos realizados </h2>

    <!-- Grupo cards -->
    <div class="d-flex flex-wrap align-items-center justify-content-center">

      <!-- Card -->
      <a target="_blank" href="http://www.luxurysdk.com/" class="proyecto p-0 col-11 col-lg-3 col-xl-3 mt-3 mt-lg-0 mt-xl-0 mx-2">

        <div class="cabecera">
          <img loading="lazy" src="img/luxurys.jpg" alt="">
        </div>

        <div class="cuerpo my-2">
          <h5 class="text-center"> Luxury's DK </h5>
          <p class="text-center font-italic"> Variedades </p>
        </div>

      </a>
      <!--  -->

      <!-- Card -->
      <a target="_blank" href="http://www.rionegociosdelsur.com/" class="proyecto p-0 col-11 col-lg-3 col-xl-3 mt-3 mt-lg-0 mt-xl-0 mx-2">

        <div class="cabecera">
          <img loading="lazy" src="img/rio_negocios.jpg" alt="">
        </div>

        <div class="cuerpo my-2">
          <h5 class="text-center"> Rio negocios del sur </h5>
          <p class="text-center font-italic"> Página de inmobiliaria </p>
        </div>

      </a>
      <!--  -->

      <!-- Card -->
      <a target="_blank" href="http://www.inmobiliariasantafedc.com/index.php" class="proyecto p-0 col-11 col-lg-3 col-xl-3 mt-3 mt-lg-0 mt-xl-0 mx-2">

        <div class="cabecera">
          <img loading="lazy" src="img/santafe.jpg" alt="">
        </div>

        <div class="cuerpo my-2">
          <h5 class="text-center"> Gomez y asociados </h5>
          <p class="text-center font-italic"> Página de inmobiliaria </p>
        </div>

      </a>
      <!--  -->


    </div>
    <!--  -->


  </section>
  <!--  -->




  <footer class="mt-5 d-flex align-items-center justify-content-center">

    <p class="text-center"> Diseñado y Desarrollado por <a href="tel:+57 3114451314">Andrés Duque</a> ©Copyright 2020. Todos los derechos reservados. </p>

  </footer>




  <!-- Boton para subir -->
  <div id="btn_subir">
    <i class="fas fa-arrow-up"></i>
  </div>
  <!--  -->


  <!-- Modal -->
  <div class="modal fade" id="contratame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!--  -->



  <?php include_once "layout/archivos_footer.php" ?>
  <script src="js/script.js"></script>

</body>