<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <title>CONTACTO J.C STORE</title>
    <link rel="stylesheet" href="./css/maincontac.css">
    <style>
        /*Estilo de contacto */
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

a{
  text-decoration: none;
}

.alert{
  display: block;
  padding: 12px 20px;
  background: #c4f70a;;
  color: #000000;
  margin-bottom: 10px;
  border: 1px solid #000000;
}

body{
  background: darkorange;
  font-family: 'Open Sans',sans-serif;
  font-size: 16px;
}

.contenedor{
  width: 90%;
  max-width: 1000px;
  background:black;
  padding: 40px;
  margin: 20px auto;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, .5);
}

.contenedor h1{
  font-size: 30px;
  font-weight: 600;
  text-align: center;
  margin-bottom: 25px;
  color: #ffffff;
}

.contenido{
  display: flex;
  width: 100%;
  overflow: hidden;
  flex-wrap: wrap;
}

.contenido .info,
.contenido .formulario{
  width: 50%;
}


.info{
  padding-left: 10px;
}

.info .col{
  width: 100%;
  display: flex;
  margin-bottom: 15px;
  font-size: 16px;
  align-items: center;
  flex-wrap: nowrap;
}

.info .col .icono{
  color:#c4f70a;
  margin-right: 10px;
}

.info .col p{
  color: #ffffff;
}

.info .redes-s{
  width: 100%;
  overflow: hidden;
  padding-left: 25px;
  display: flex;
  flex-wrap: wrap;
}
.info .redes-s a{
  display: flex;
  width: 40px;
  height: 40px;
  background: #c4f70a;
  color: #030303;
  margin: 5px;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  border-radius: 50%;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, .4);
}
.info .redes-s a:hover{
  box-shadow: 0px 3px 8px rgba(0, 0, 0, .4);
  /* background: #000; */
}


.formulario{
  padding-left: 10px;
}

.formulario input[type='text'],
.formulario textarea{
  width: 100%;
  margin-bottom: 15px;
  padding: 12px 20px;
  border: 1px solid #0f0e0e;
  color: #000000;
  font-family: 'Open Sans',sans-serif;
  font-weight: 400;
  outline: 0;
}

.formulario textarea{
  max-width: 100%;
  min-width: 100%;
  min-height: 150px;
  max-height: 200px;
}

.formulario input[type='text']:focus,
.formulario textarea:focus{
  border: 1px solid #15CF8A;
}

.formulario button{
  padding: 12px 30px;
  border: transparent;
  background: #c4f70a;
  color:#000000;
  cursor: pointer;
  float: right;
}


@media (max-width: 520px){
 .contenedor{
     padding: 40px 20px;
 }

 .contenido .info,
 .contenido .formulario{
     width: 100%;
     padding: 0px;
 }

 .contenido .info{
     margin-bottom: 30px;
 }
}

@media (max-width: 800px){

  .contenido .info,
  .contenido .formulario{
      width: 100%;
      padding: 0px;
  }

  .contenido .info{
      margin-bottom: 30px;
  }
}
    </style>
</head>
<body>
    
    <div class="contenedor">

        <h1>Formulario Contacto</h1>

        <div class="contenido">

            <div class="info">

                <div class="col">
                    <i class="icono fas fa-map-marker-alt"></i>
                    <p>Cra 113 b bis # 67 b 34</p>
                </div>

                <div class="col">
                    <i class="icono fas fa-envelope"></i>
                    <p>consultastore@correo.com</p>
                </div>

                <div class="col">
                    <i class="icono fas fa-phone"></i>
                    <p>(601) 6262-222 <br> (601) 3343-543</p>
                </div>

                <div class="redes-s">

                    <a href="https://es-la.facebook.com/login/device-based/regular/login/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>

                </div>

            </div>

            <form action="enviado.html" method="GET" class="formulario">

                <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                <input type="text" name="correo" placeholder="Correo electróico" id="correo">
                <input type="text" name="asunto" placeholder="Asunto" id="asunto">
                <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                <button type="button" onclick="validarFormulario()" >Enviar</button>


            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="contacto.js"></script>
</body>
</html>