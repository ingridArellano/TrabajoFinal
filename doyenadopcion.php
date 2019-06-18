
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
    <?php include "cabecera.php"?>
    <div class="general">
        <div class="titulo">
            <h1>DOY EN ADOPCIÓN</h1>
        </div>

        <p>¿Tienes una mascota y quieres conseguirle un hogar?<br>
            Déjanos tus datos y nos comunicaremos contigo..</p>

    <form class="datos" action="procesar_adopcionn.php" method="post">
                <h2 class="doy">REGISTRO DEL DUEÑO</h2>
                <div class="hola">
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres" placeholder="Ingresa tu(s) nombre(s)">
                </div>

                <div class="hola1">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text"  name="apellidos" placeholder="Ingresa tus apellidos completos">
                </div>

                <div class="hola2">
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" placeholder="Ingresa tu correo">
                </div>

                <div class="hola3">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" >
                        <option value="" selected>Indicar Sexo</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>

                <div class="hola4">
                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechadenacimiento">
                </div>

                <div class="hola5">
                    <label for="distrito">Distrito:</label>
                    <select name="distrito" >
                        <option value="Elegir" id="AF">Indicar Distrtito</option>
                        <option value="Ancon">Ancon</option>
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
                        <option value="La Molina"selected>La Molina</option>
                        <option value="La Victoria">La Victoria</option>
                        <option value="Lima">Lima</option>
                        <option value="Lince">Lince</option>
                        <option value="Los Olivos">Los Olivos</option>
                        <option value="Lurigancho-Chosica">Lurigancho-Chosica</option>
                        <option value="Lurigancho">Lurigancho</option>
                        <option value="Magdalena del Mar">Magdalena del Mar</option>
                        <option value="Miraflores">Miraflores</option>
                        <option value="Pachacamac">Pachacamac</option>
                        <option value="Pucusana">Pucusana</option>
                        <option value="Pueblo Libre">Pueblo Libre</option>
                        <option value="Puente Piedra">Puente Piedra</option>
                        <option value="Punta Hermosa">Punta Hermosa</option>
                        <option value="Punta Negra">Punta Negra</option>
                        <option value="Rimac">Rimac</option>
                        <option value="San Bartolo">San Bartolo</option>
                        <option value="San Borja">San Borja</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                        <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                        <option value="San Luis">San Luis</option>
                        <option value="San Martin de Porres">San Martin de Porres</option>
                        <option value="San Miguel">San Miguel</option>
                        <option value="Santa Anita">Santa Anita</option>
                        <option value="Santa Maria del Mar">Santa Maria del Mar</option>
                        <option value="Santa Rosa">Santa Rosa</option>
                        <option value="Santiago de Surco">Santiago de Surco</option>
                        <option value="Surquillo">Surquillo</option>
                        <option value="Villa El Salvador">Villa El Salvador</option>
                        <option value="Villa Maríaa del Triunfo">Villa Maríaa del Triunfo</option>
                    </select>
                </div>

                <div class="hola6">
                    <label for="celular">Celular:</label>
                    <input type="text"  name="celular" placeholder="Ingrese número de celular">
                </div>


                <h2 class="registro">REGISTRO DE LA MASCOTA</h2>
                
                <div class="se">
                    <label for="nombre_masc">Nombre Mascota:</label>
                    <input type="text"  name="nombre_masc" placeholder="Ingresa el nombre de tu mascota">
                </div>                 

                <div class="se3">
                    <label for="sexo_masc">Género de la Mascota:</label>
                    <select name="sexo_masc" >
                        <option value="" selected>Indicar género de la mascota</option>
                        <option value="M">macho</option>
                        <option value="H">hembra</option>
                    </select>
                </div>

                <div class="se4">
                    <label for="edad_masc">Edad de tu mascota en <strong>MESES</strong>:</label>
                    <input type="text" name="edad_masc" placeholder="Ingresa la edad de tu mascota">
                </div>

                <div class="se8">
                    <label for="espacio_req">Espacio Requerido</label>
                    <input type="text" name="espacio_req" placeholder="Ingresa el espacio que requiere tu mascota">
                </div>

                <div class="se9">
                    <label for="nivel_act">NIvel de actividad:</label>
                    <input type="text" name="nivel_act" placeholder="Ingresa el nivel activo de tu mascota">
                </div>

                <div class="se10">
                    <label for="peso_masc">Peso de la Mascota:</label>
                    <input type="text" name="peso_masc" placeholder="Ingresa el peso de tu mascota">
                </div>

                <div class="se11">
                    <label for="tamaño_masc">Tamaño de la Mascota:</label>
                    <input type="text" name="tamaño_masc" placeholder="Ingresa el tamaño de tu mascota">
                </div>

                <div class="se12">
                    <label for="tiempo_solo">Tiempo solo de la Mascota:</label>
                    <input type="text" name="raza_masc" placeholder="Ingresa el tiempo que lleva solo tu mascota">
                </div>

                <button class="hi">Enviar</button>
            </form>
        </div>
    </div>
<?php include "pie.php"?>
</body>

</html>