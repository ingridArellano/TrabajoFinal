<?php
#Validacion
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit;#ez
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de inicio de sesión</title>
    <link rel="stylesheet" href="estilos_login.css">	

</head>
<body>

<?php if(isset($_GET["m"])){ ?>
<p style="color: red"> Datos incorrectos</p>

<?php } ?>


<form class="login_conte" action="login_procesar.php" method="post">
<h2>AdoptMe: Inicio de sesión</h2>
<div>
   <input type="text" name="u" placeholder="Usuario"/>
   </div>
<div>
    <input type="password" name="p" placeholder="Contraseña"/>
   </div>
<div>
    <input type="submit" name="" value="Iniciar sesión"/>
    </div>


</form>



</body>
</html>