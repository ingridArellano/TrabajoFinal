<?php
session_start(); 
$id_mascota=$_GET["id"];
$pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
$id_usuario=$_SESSION["id_usuario"];
$sq = "INSERT INTO fichas values (NULL, '$id_usuario','$id_mascota')";
$pdo->query($sq);

$estado="adoptado";

$resultado=$pdo->query("SELECT * FROM mascotas WHERE id_masc='$id_mascota' ");
$sql = "UPDATE mascotas SET estado='$estado' WHERE id_masc='$id_mascota'" ;
$pdo->query($sql);




 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/hojaContacto.css">
    <style> 
        html { 
            background-image: url(imagenes/adoptYa.jpg);
            background-size: 100vw 100vh;
            background-attachment: fixed;
            margin: 0;
        }
    </style>
</head>

 
 <body>
   <div style="text-align: center;font-size:20px;background: salmon;">
    <p>Estimado hemos recibido su ficha de adopción. </p>
    <p>Nos comunicaremos con usted mediante su correo: </p>
    <p>Gracias por postular. </p>
    <a href="principal.php">Volver a la página principal</a>
   </div>
</body>
</html>