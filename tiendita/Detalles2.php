<?php
require_once 'php/conexion.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

$consulta = "SELECT count(ID_PRODUCTO) FROM `productos2` WHERE ID_PRODUCTO = '$id' AND `DISPO_PRODUC`>=1";
$resultado = mysqli_query($conectar,$consulta);
$registros = mysqli_num_rows($resultado);
if($registros>0){

    $consulta1="SELECT `NOMBRE_PRODUC`,`DESCRIPCION_PRODUC`,`PRECIO_PRODUC`,`DESC_PRODUC` FROM `productos2` WHERE ID_PRODUCTO='$id' AND `DISPO_PRODUC`>=1 LIMIT 1";
    $resultado1 = mysqli_query($conectar,$consulta1);
    $registros1 = mysqli_num_rows($resultado1);

    foreach($resultado1 as $row){

        $nombre=$row['NOMBRE_PRODUC'];
        $descripcion=$row['DESCRIPCION_PRODUC'];
        $precio=$row['PRECIO_PRODUC'];
        $descuento=$row['DESC_PRODUC'];
    }

}

?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pizzas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body >
    <!--Barra de navegación-->
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <strong>RAPPI FOOD</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Inicio.php">INCIO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="hamburguesas.php">Hamburguesas</a></li>
            <li><a class="dropdown-item" href="pizzas.php">Pizzas</a></li>
            <li><a class="dropdown-item" href="salchipapas.php">Salchipapas</a></li>
            <li><a class="dropdown-item" href="tacos.php">Tacos</a></li>
            <li><a class="dropdown-item" href="#"></a></li>


          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Formulario.php">FORMULARIO</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Contactos.php">CONTACTOS</a>
        </li>
      </ul>
    </div>
            </div>
        </div>
    </header>

    <!--Contenido-->

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            
                            <?php
                           $imagen = "img/productos2/".$id."/principal.jpg";
                           $imagen2=  "img/productos2/".$id."/second.jpg";
                           if(!file_exists($imagen)){
                           $imagen = "img/productos2/noimagen.jpg";
                           }

                          ?>
                            <div class="carousel-item active">
                                <img src="<?php echo $imagen; ?>" class="d-block w-100">

                            </div>
    
                            <div class="carousel-item">
                            <img src="<?php echo $imagen2; ?>" class="d-block w-100">

                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>

                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">

                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            
                        </button>

                    </div>


                    
                </div>
                <div class="col-md-6 order-md-2">
                <h5 class="card-tittle">
                <?php echo $row['NOMBRE_PRODUC'];?>
              </h5>     
                     

    <p><del>precio</del></p>
               <h2>$ <small class="text-success"><?php echo $row['DESC_PRODUC'];?>% descuento</small></h2>


                <h2><p class="card-text">$ <?php echo number_format ($row['PRECIO_PRODUC'],2,',','.');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</h2>

                <p class="card-text">DESCRIPCION: <?php echo $row['DESCRIPCION_PRODUC'];?></p>

                <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar ahora</button>
                        <button class="btn btn-outline-primary" type="button" onclick="">Agregar al carrito</button>

                </div>  
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

       
  
</body>

</html>