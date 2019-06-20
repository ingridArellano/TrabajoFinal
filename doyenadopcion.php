<?php 
session_start(); 
if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="doyadopcion.css">
    <title>Doy en adopción</title>
</head>

<body>
    <?php include "cabecera.php" ?>
    <div class="general">
        <div class="titulo">
            <h1>DOY EN ADOPCIÓN</h1>
        </div>

        <p>¿Tienes una mascota y quieres conseguirle un hogar?<br>
            Déjanos tus datos y nos comunicaremos contigo..</p>

        <h2 class="registro">REGISTRO DE LA MASCOTA</h2>

        <?php if (isset($_GET["error"]) && $_GET["error"] == "campos") { ?>
            <p style="color:black;font-size: 34px;text-align: center;font-weight: bold"> Faltan campos: Por favor llénelos</p>
        <?php } ?>

        <form class="datos"  action="procesar_adopcion.php" method="post" enctype="multipart/form-data">
            <label class="label2" for="nombre_masc">Nombre Mascota:</label>
            <input class="inputt" type="text" name="nombre_masc" placeholder="Ingresa el nombre de tu mascota">

            <label class="label2" for="sexo_masc">Sexo de la Mascota:</label>
            <select class="inputt" name="sexo_masc">
                <option value="" selected>Indicar sexo de la mascota</option>
                <option value="macho">macho</option>
                <option value="hembra">hembra</option>
            </select>

            <label class="label2" for="tamaño_masc">Tamaño de la Mascota:</label>
            <input class="inputt" type="text" name="tamaño_masc" placeholder="Ingresa el tamaño de tu mascota">

            <label class="label2" for="peso_masc">Peso de la Mascota:</label>
            <input class="inputt" type="text" name="peso_masc" placeholder="Ingresa el peso de tu mascota">

            <label class="label2" for="edad_masc">Edad de tu mascota en <strong>MESES</strong>:</label>
            <input class="inputt" type="text" name="edad_masc" placeholder="Ingresa la edad de tu mascota">

            <label class="label2" for="nivel_act">NIvel de actividad:</label>
            <input class="inputt" type="text" name="nivel_act" placeholder="Ingresa el nivel activo de tu mascota">

            <label class="label2" for="espacio_req">Espacio Requerido:</label>
            <input class="inputt" type="text" name="espacio_req" placeholder="Ingresa el espacio que requiere tu mascota">

            <label class="label2" for="tiempo_solo">Tiempo solo de la Mascota:</label>
            <input class="inputt" type="text" name="tiempo_solo" placeholder="Ingresa el tiempo que lleva solo tu mascota">
            
            <label class="label2" for="estado">Estado en el que se encuentra tu mascota:</label>
            <input class="inputt" type="text" name="estado" placeholder="Ingresa el estado en el esta tu mascota">

            <label class="label2" for="tipo_masc">Tipo de la Mascota:</label>
            <input class="inputt" type="text" name="tipo_masc" placeholder="Ingresa el tipo de tu mascota">
            
            <label class="label2" for="imagen">Subir foto de la Mascota:</label>
            <input class="inputt" type="file" name="imagen">


            <button type="submit" class="inputt">Enviar</button>
        </form>
    </div>
    <?php include "pie.php" ?>
</body>

</html>