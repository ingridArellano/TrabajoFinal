<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdoptYa</title>
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

    <?php if(isset($_GET["error"]) && $_GET["error"] == "faltancampos") { ?>
        <p style="color:red;font-size: 24px;text-align: center;font-weight: bold"> Faltan campos : Llénelos</p>
    <?php } ?>

    <form action="procesar_adoptYa.php" method="post">

        <h2 style="text-align: center;font-size:50px;background: salmon;">REGISTRO</h2>

        <label class="labell">1. Datos para el inicio de sesión</label>
        <br>
        <br>
        <label class="label2">Usuario:</label>
        <input class="inputt" type="text" name="usuarioNick" >
        <label class="label2">Contraseña</label>
        <input class="inputt" type="password" name="contraseñaNick" >

        <label class="labell">2. Datos personales </label>
        <br>
        <br>
        <label class="label2">Nombres:</label>             
        <input class ="inputt" type="text" name="nombre" >
        <label class="label2">Apellidos:</label>
        <input class ="inputt" type="text" name="apellido" >
        <label class="label2">Dirección:</label>
        <input class ="inputt" type="text" name="direccion" >
        <label class="label2">Distrito:</label>
        <select class ="inputt" name="distrito">
                            <option value="">Distrito</option>
                            <option value="Ancón">Ancón</option>
                            <option value="Ate">Ate</option>
                            <option value="Barranco">Barranco</option>
                            <option value="Breña">Breña</option>
                            <option value="Callao">Callao</option>
                            <option value="Carabayllo">Carabayllo</option>
                            <option value="Chaclacayo">Chaclacayo</option>
                            <option value="Chorrillos">Chorrillos</option>
                            <option value="Cieneguilla">Cieneguilla</option>
                            <option value="Comas">Comas</option>
                            <option value="El Agustino">El Agustino</option>
                            <option value="Independencia">Independencia</option>
                            <option value="Jesús María">Jesús María</option>
                            <option value="La Molina">La Molina</option>
                            <option value="La Victoria">La Victoria</option>
                            <option value="Lima">Lima</option>
                            <option value="Lince">Lince</option>
                            <option value="Los Olivos">Los Olivos</option>
                            <option value="Lurigancho-Chosica">Lurigancho-Chosica</option>
                            <option value="Lurín">Lurín</option>
                            <option value="Magdalena del Mar">Magdalena del Mar</option>
                            <option value="Miraflores">Miraflores</option>
                            <option value="Pachacámac">Pachacámac</option>
                            <option value="Pucusana">Pucusana</option>
                            <option value="Pueblo Libre">Pueblo Libre</option>
                            <option value="Puente Piedra">Puente Piedra</option>
                            <option value="Punta Hermosa">Punta Hermosa</option>
                            <option value="Punta Negra">Punta Negra</option>
                            <option value="Rímac">Rímac</option>
                            <option value="San Bartolo">San Bartolo</option>
                            <option value="San Borja">San Borja</option>
                            <option value="San Isidro">San Isidro</option>
                            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                            <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                            <option value="San Luis">San Luis</option>
                            <option value="San Martín de Porres">San Martín de Porres</option>
                            <option value="San Miguel">San Miguel</option>
                            <option value="Santa Anita">Santa Anita</option>
                            <option value="Santa María del Mar">Santa María del Mar</option>
                            <option value="Santa Rosa">Santa Rosa</option>
                            <option value="Santiago de Surco">Santiago de Surco</option>
                            <option value="Surquillo">Surquillo</option>
                            <option value="Villa El Salvador">Villa El Salvador</option>
                            <option value="Villa María del Triunfo">Villa María del Triunfo</option>                                     
        </select>
        <label class="label2">Celular:</label>
        <input class ="inputt" type="number" maxlength="9" name="celular">
        <label class="label2">Fecha de nacimiento:</label>
        <input class ="inputt" type="date" name="fechaNacimiento">
        <label class="label2">DNI:</label>
        <input class ="inputt" type="number" maxlength="8" name="dni">
        <label class="label2">Correo electrónico:</label>
        <input class ="inputt" type="email" name="correo">
        <label class="label2">Estado civil:</label>
        <select class ="inputt" name="estadoCivil">
                <option value="">Estado Civil</option>
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="viudo">Viudo</option>
                <option value="divorciado">Divorciado</option>
        </select>
        <label class="label2">Ocupación:</label>
        <input class ="inputt" type="text" name="ocupacion">
        <label class="label2">Centro de trabajo/estudio:</label>
        <input class ="inputt" type="text" name="centroET">
        
        <input type="checkbox" id="tos" name="tos" value="tos" checked>
        <label class="label2" for="tos">Deseo recibir información de AdoptMe en mi correo.</label>
        
        <button type="submit" class="inputt">REGISTRAR</button>
        
        <p class="otrol">¿Ya eres parte de esta familia? <br> <a class="otrol" href="login.php" class="btn">Inicia Sesión</a> </p>
        
    </form>
   
</body>
</html>