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
        background: url(imagenes/animalesDomesticos.jpg) no-repeat center fixed; 
        background-size: cover;
        }
    </style>
</head>
<body>

    <?php if(isset($_GET["error"]) && $_GET["error"] == "faltancampos") { ?>
        <p style="color:red"> Faltan campos : llénelos</p>
    <?php } ?>

    <div>
        <img src="imagenes/contacto.png" alt="">
    </div>

    <div class="padre">
        <form action="procesar_contacto.php" method="post">

            <div class="hijo">
                <label>Nombres:</label>
                <input class="inputt" type="text" name="nombre">
            </div>
            
            <div class="hijo">
                <label>Apellidos:</label>
                <input class="inputt" type="text" name="apellido">
            </div>

            <div class="hijo">
                <label>CorreoElectrónico:</label>
                <input class="inputt" type="text" name="correo">
            </div>
            
            <div class="hijo">
                <label>Asunto:</label>
                <input class="inputt" type="text" name="asunto">
            </div>

            <div class="hijo">
                <label>Mensaje:</label>
                <input class="inputt" type="text" name="mensaje">
            </div>

            <div class="hijo">
                <input type="checkbox" id="tos" name="tos" value="tos">
                <label for="tos">En cumplimiento de la ley de protección de Datos Personales, 
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
                                 manipulación de sus datos.</label>
            </div>

            <button type="submit" class="boton">Enviar</button>

        </form>
    </div>
</body>
</html>