<?php
session_start(); #Esta funcion debe ser llamada antes de un output

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'cabecera.php'?>
<h1>Página principal</h1>

<?php if(isset($_SESSION["usuario"])){ ?>
<p>Hola <?php echo $_SESSION["usuario"] ?>, bienvenido al sitio web. <a href="logout.php">Cerrar sesión</a></p>
<?php } else { ?>



<p>Hola, inicia sesión <a href="login.php">aqui</a></p>
<?php } ?>
<?php include 'pie.php'?>
</body>
</html>