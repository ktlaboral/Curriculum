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
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto">

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
                              } ?> " href="proyectos.php"> Proyectos </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  <?php if ($pagina == "Sobre mi") {
                                echo "active";
                              } ?> " href="sobre_mi.php">Sobre mi</a>
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
      <a href="#" class="text-center boton position-relative w-100 h-100">Contrátame</a>
    </div>
    <!--  -->

    <!-- Boton ver CV -->
    <div class="ml-3 padre_boton position-relative">
      <a href="#" class="text-center boton position-relative w-100 h-100">Ver CV</a>
    </div>
    <!--  -->

  </div>
  <!--  -->

  <!-- Acerca de mi -->
  <section class="container mt-5 d-flex align-items-center justify-content-center flex-wrap">

    <div class="col-12 col-lg-6 col-xl-6">

      <img class="w-100" src="img/sobre_mi.png" alt="Sobre mi">

    </div>

    <div class="col-12 col-lg-6 col-xl-6">

      <h2 class="text-center"> Déjame presentarme </h2>

      <p class="mt-5 text-justify"> Mi nombre es Andrés Mauricio, actualmente tengo 21 años, soy desarrollador web desde hace casi 2 años y desde hace medio año empecé como free lancer (Desarrollador independiente). </p>

      <p class="text-justify "> Algo que siempre me ha caracterizado es el ser autodidacta, gracias a ello he podido aprender mucho en lo que me apasiona, la informatica. Mi objetivo es brindar un servicio aplicando siempre buenas practicas, empeño y por sobre todo entusiasmo por lo que hago, a cada trabajo le empleo un 110% para realizar un trabajo excelente.  </p>

    </div>

  </section>
  <!--  -->

  <!-- Habilidades -->

  <h1 class="text-center mt-5"> Mis habilidades </h1>

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


  </section>
  <!--  -->




  <?php include_once "layout/archivos_footer.php" ?>
  <script src="js/prueba.js"></script>

</body>