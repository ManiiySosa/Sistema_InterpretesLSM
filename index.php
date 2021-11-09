<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema Interpretes de LSM</title>
  <!-- iconos bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- estilos generales -->
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <!-- Cabecera -->
  <div id="container">
    <header id="header">
      <div id="logo">
        <img src="assets/img/Hola_LSM.png" alt="logotipo" />
        <h1 id="encabezado">servicios interpretes LSM</h1>
      </div>
      <!-- Menu -->
      <nav id="menu">
        <ul>
          <li><a href="#">INICIO</a></li>
          <li>
            <a href="#"><img src="#" alt="imagen usuario" /></a>
          </li>
          <li><a href="#">CERRAR SESION</a></li>
        </ul>
      </nav>
    </header>
    <!-- Fin Cabecera -->

    <!--Contenido central-->
    <div id="content">
      <!-- Barra Lateral -->
      <aside id="sidebar">
        <h1><i class="bi bi-gear-wide icon-sidebar"></i> Servicios</h1>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h3 class="mb-0">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">
                  Buscar Interprete
                </button>
              </h3>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <h4>Filtros</h4>
                <form action="#">
                  <label for="">Años de experiencia</label>
                  <input type="number">
                  <label for="">Area especialidad</label>
                  <input type="text">
                </form>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h3 class="mb-0">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  Registrar Servicio
                </button>
              </h3>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <a href="#" class="btn btn-primary">Crear Servicio</a>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!-- Fin Barra Lateral -->
      <!-- seccion central -->
      <section id="central">
        <h1>Interpretes destacados</h1>
        <article class="profile">


        </article>
      </section>
      <!--Fin seccion central -->
    </div>
    <!-- Fin Contenido Central -->

    <!-- Pie de pagina -->
    <footer id="footer">
      <p>
        &copy
        <?=date('Y')?>
      </p>
    </footer>
    <!-- Fin Pie de pagina -->
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>