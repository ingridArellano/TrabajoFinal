<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos/hojaContacto.css">
    <style> 
        html { 
            background-image: url(imagenes/animalesDomesticos.jpg);
            background-size: 100vw 100vh;
            background-attachment: fixed;
            margin: 0;
        }
    </style>
</head>
<body>
<?php include 'cabecera.php'?>

    <?php if(isset($_GET["error"]) && $_GET["error"] == "faltancampos") { ?>
        <p style="color:red"> Faltan campos : llénelos</p>
    <?php } ?>

    
    <div>
        <img src="imagenes/contacto.png" alt="">
    </div>

    <form action="procesar_contacto.php" method="post">

        <label class="labell" >Nombres:</label>
        <input class="inputt" type="text" name="nombre">

        <label class="labell" >Apellidos:</label>
        <input class="inputt" type="text" name="apellido">

        <label class="labell" >Correo Electrónico:</label>
        <input class="inputt" type="email" name="correo">

        <label class="labell" >Asunto:</label>
        <input class="inputt" type="text" name="asunto">

        <label class="labell" >Mensaje:</label>
        <textarea name="mensaje"></textarea>

        <input type="checkbox" id="tos" name="tos" value="tos">
        <label style="margin: .5em 0 0 0; text-align: justify; color: black;
                        font-size: 15px; font-weight: bold;" for="tos">
                        En cumplimiento de la ley de protección de Datos Personales, 
                        por medio del presente documento solicitamos su autorización 
                        para que AdoptMe recolecte, almacene y use sus datos personales 
                        registrados en el presente formulario. Sus datos personales se 
                        almacenarán de manera segura, habiendo tomado todas las medidas 
                        de precaución para proteger su información contra adulteraciones, 
                        pérdidas, consultas, uso o acceso no autorizado o fraudulento. 
                        Esto con el objetivo de que su información esté protegida, por 
                        medio de la presente aceptación, Usted declara expresamente que 
                        la finalidad de la utilización por AdoptMe de sus datos personales, 
                        le ha sido plenamente informada y autoriza de modo expreso la
                        manipulación de sus datos.
        </label>


        <button type="submit" class="inputt">Enviar</button>

    </form>
<?php include 'pie.php'?>
</body>
</html>