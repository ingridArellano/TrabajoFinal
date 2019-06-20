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
    <link rel="stylesheet" href="estilos/hojaContacto.css">
</head>
<body>
    <?php include 'cabecera.php'?>

    <h1>Mi cuenta</h1>

    <?php if(isset($_SESSION["usuario"])){ ?>
            <p style="color:black;font-size: 24px;text-align: center;font-weight: bold">Hola 
            <?php echo $_SESSION["usuario"] ?>
            , Bienvenido a su perfil. <a href="logout.php">Cerrar sesión</a> </p>

        <div>
            <div style="border: 1px solid red;">
                <p>asd</p>
            </div>

            <div style="border: 1px solid red;">

                <form action="" method="post">

                    <p>1. Datos personales</p>
        
                    <input class ="inputt" type="text" name="nombre" placeholder="Nombres">
                    <input class ="inputt" type="text" name="apellido" placeholder="Apellidos">

                    <input class ="inputt" type="number" maxlength="9" name="celular" placeholder="Teléfono móvil">
                    <input class ="inputt" type="number" maxlength="9" name="telefono" placeholder="Teléfono fijo">

                    <input class ="inputt" type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
                    <input class ="inputt" type="number" maxlength="8" name="dni" placeholder="DNI">

                    <input class ="inputt" type="email" name="correo" placeholder="Correo Electrónico">

                    <select class ="inputt" name="estadoCivil">
                            <option value="">Estado Civil</option>
                            <option value="soltero">Soltero</option>
                            <option value="casado">Casado</option>
                            <option value="viudo">Viudo</option>
                            <option value="divorciado">Divorciado</option>
                    </select>

                    <p>2. Localización</p>

                    <select class ="inputt" name="distrito">
                                        <option value="">Distrito</option>
                                        <option value="1">Ancón</option>
                                        <option value="2">Ate</option>
                                        <option value="3">Barranco</option>
                                        <option value="4">Breña</option>
                                        <option value="5">Callao</option>
                                        <option value="6">Carabayllo</option>
                                        <option value="7">Chaclacayo</option>
                                        <option value="8">Chorrillos</option>
                                        <option value="9">Cieneguilla</option>
                                        <option value="10">Comas</option>
                                        <option value="11">El Agustino</option>
                                        <option value="12">Independencia</option>
                                        <option value="13">Jesús María</option>
                                        <option value="14">La Molina</option>
                                        <option value="15">La Victoria</option>
                                        <option value="16">Lima</option>
                                        <option value="17">Lince</option>
                                        <option value="18">Los Olivos</option>
                                        <option value="19">Lurigancho-Chosica</option>
                                        <option value="20">Lurín</option>
                                        <option value="21">Magdalena del Mar</option>
                                        <option value="22">Miraflores</option>
                                        <option value="23">Pachacámac</option>
                                        <option value="24">Pucusana</option>
                                        <option value="25">Pueblo Libre</option>
                                        <option value="26">Puente Piedra</option>
                                        <option value="27">Punta Hermosa</option>
                                        <option value="28">Punta Negra</option>
                                        <option value="29">Rímac</option>
                                        <option value="30">San Bartolo</option>
                                        <option value="31">San Borja</option>
                                        <option value="32">San Isidro</option>
                                        <option value="33">San Juan de Lurigancho</option>
                                        <option value="34">San Juan de Miraflores</option>
                                        <option value="35">San Luis</option>
                                        <option value="36">San Martín de Porres</option>
                                        <option value="37">San Miguel</option>
                                        <option value="38">Santa Anita</option>
                                        <option value="39">Santa María del Mar</option>
                                        <option value="40">Santa Rosa</option>
                                        <option value="41">Santiago de Surco</option>
                                        <option value="42">Surquillo</option>
                                        <option value="43">Villa El Salvador</option>
                                        <option value="44">Villa María del Triunfo</option>
                                                                    
                    </select>

                    <input class ="inputt" type="text" name="direccion" placeholder="Dirección">

                    <p>3. </p>

                    <input class ="inputt" type="text" name="ocupacion" placeholder="Ocupación">
                    <input class ="inputt" type="text" name="centroET" placeholder="Centro de trabajo/estudio">

                    <p>4. Cambiar contraseña</p>
                    
                    <input type="password" name="contraseñaNueva">
                    <input type="password" name="">

                </form>
            </div>
        </div>


    <?php } 
    
          else { ?>
            <p style="color:black;font-size: 24px;text-align: center;font-weight: bold">Hola, inicia sesión 
            <a href="login.php">aqui</a> </p>
    <?php } ?>

    <?php include 'pie.php'?>
</body>
</html>