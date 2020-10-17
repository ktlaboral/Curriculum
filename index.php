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
  <section id="vista_principal" class="d-flex">

    <div class="col-6 p-0 m-0 d-none d-lg-block d-xl-block">
      <img class="imagenes_fondo" src="img/desarrollador2.jpg" alt="">
    </div>

    <div class="col-12 col-lg-6 col-xl-6 p-0 m-0">
      <img class="imagenes_fondo" src="img/desarrollador.jpg" alt="">
    </div>

    <div id="circulo_perfil">
      <img class="imagen_perfil w-100 h-auto" src="img/user.jpg" alt="">
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

  <div style="height:2000px;"></div>


  <?php include_once "layout/archivos_footer.php" ?>
  <script src="js/prueba.js"></script>

</body>