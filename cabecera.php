<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo-header-footer.css">
    <style>
@import url('https://fonts.googleapis.com/css?family=Pattaya&display=swap');
</style>
    <title>Document</title>
</head>

<body>

    <header>
        <div class="contenedor">
            <input type="checkbox" id="boton">
            <label  for="boton"><img src="main.png"></label>
            <div class="holi">
                <img src="https://sites.google.com/site/webquestanimalesdom/_/rsrc/1472873888662/home/10780695-ilustracion-de-tres-animales-domesticos%20png.png">
            </div>
            
            <nav>
                <ul>
                    <li><a href="principal.php">AdoptMe</a></li>
                    <li><a href="adoptar.php">Adoptar</a></li>
                    <li><a href="doyenadopcion.php">Doy en Adopción</a></li>
                    <li><a href="campañas.php">Campaña</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="perfil_usuario.php">Perfil</a></li>

                <?php if(isset($_SESSION["usuario"])){
                ?>
                <li class="sesion">Hola :    "  <?php echo $_SESSION["usuario"]?>  "</a></li><a href="logout.php"><span>Salir</span></a></li>
                   <?php }
                else {
                ?><a href="login.php"><span>Iniciar Sesión</span></a></li>';
                     <?php
                }
                ?>
                
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>