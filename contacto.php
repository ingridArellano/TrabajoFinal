<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="estilos/hojaContacto.css">
</head>
<body>
    <div>
        <img src="imagenes/contacto.png" alt="">
    </div>

    <div class="padre">
        <form action="" method="post">

            <div class="hijo">
                <label>Nombres:</label>
                <input type="text" name="n">
            </div>
            
            <div class="hijo">
                <label>Apellidos:</label>
                <input type="text" name="a">
            </div>

            <div class="hijo">
                <label>Correo Electrónico:</label>
                <input type="text" name="c">
            </div>
            
            <div class="hijo">
                <label>Asunto:</label>
                <input type="text" name="as">
            </div>

            <div class="hijo">
                <label>Mensaje</label>
                <input class="inputt" type="text" name="m">
            </div>

            <div class="hijo">
                <input type="checkbox" id="tos" name="tos" value="tos">
                <label for="tos">Acepto los términos y condiciones </label>
            </div>

            <button class="boton">Enviar</button>

        </form>
    </div>
</body>
</html>