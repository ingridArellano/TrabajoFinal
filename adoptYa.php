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

    <form action="" method="">

        <h2>Ficha de postulación a adopción</h2>
        
        <input class ="inputt" type="text" name="nombre" placeholder="Nombres">
        <input class ="inputt" type="text" name="apellido" placeholder="Apellidos">
        
        <input class ="inputt" type="text" name="direccion" placeholder="Dirección">
        
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
        
        <input class ="inputt" type="number" name="celular" placeholder="Teléfono móvil">
        <input class ="inputt" type="number" name="telefono" placeholder="Teléfono fijo">
        
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
        <input class ="inputt" type="text" name="ocupacion" placeholder="Ocupación">
        
        <input class ="inputt" type="text" name="centroET" placeholder="Centro de trabajo/estudio">
        
            <input type="checkbox" id="tos" name="tos" value="tos" checked>
            <label class="label2" for="tos">Deseo recibir información de AdoptMe en mi correo.</label>

        <button type="submit">Postular</button>
    
    </form>
    
</body>
</html>