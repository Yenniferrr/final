<?php
include_once('../config/config.php');
include('Lector.php');


if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $lector= new Lector(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $lector-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crear lector</title>

    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>


<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="html/principal.html">
            <img src="../imagenes\logo-2150297__480.jpg" alt="" width="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cuentos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../dasd.html">Rodolfo el reno</a></li>
                  <li><a class="dropdown-item" href="../cerdos.html">Los 3 cerditos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../jardin.html">Un lindo jardín</a></li>
                </ul>
              </li>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Videos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../video1.html">Caperucita Roja</a></li>
             
              </ul>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../admi.html">Iniciar sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="add.php">Registrate</a>
              </li>
            </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


<div class="container">
<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<h2 class="text-center mb-5">Informacion del lector</h2>


    <form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres"   class="form-control" >

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" class="form-control"  placeholder="Numero de celular">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Profesion</label>
    <input type="text" name="profesion" id="profesion" class="form-control"  placeholder="Profesional en">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Interes</label>
    <input type="text" name="interes" id="interes" class="form-control">
  </div>
  <div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
</form>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<footer>
<meta charset="UTF-8">
  <title>Footer Design</title>
  
  <link rel="stylesheet" href="../css/footer.css">
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <div class="container-footer-all">
     <div class="container-footer-all">
      
          <div class="container-body">

              <div class="colum1">
                  <h1>Derechos</h1>

                  <p>Yennifer Cubillos</p>
                  <p>Katalina Maldonado</p>
                  <p>Sindy Carreño</p>

              </div>

              <div class="colum2">

                  <h1>Redes Sociales</h1>

                  <div class="row">
                      <img src="../Imagenes\facebook.png">
                      <label>Siguenos en Facebook</label>
                  </div>
                  <div class="row">
                      <img src="../Imagenes\twitter.png">
                      <label>Siguenos en Twitter</label>
                  </div>
                  <div class="row">
                      <img src="../Imagenes\instagram.png">
                      <label>Siguenos en Instagram</label>
               
                  </div>


              </div> 

          </div>
      
  </footer>
 

</html>