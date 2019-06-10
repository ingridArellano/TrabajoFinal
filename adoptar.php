<?php
$pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" a href="estilos/hojaAdoptar.css">

</head>
<body>
<?php include 'cabecera.php'?>
<h1>¡AdoptMe al rescate!</h1>
<div class="seleccion">
    <h2>¡Encuentra a tu compañero ideal!</h2>
    <form action="procesar_busqueda.php" method="POST">
        <div>
        <select name="sexo" id="sexo">
            <option value="">Sexo</option>
            <option value="Hembra">Hembra</option>
            <option value="Macho">Macho</option>
        </select>
        </div>

        <div>
        <select name="tamaño" id="tamaño">
            <option value="">Tamaño</option>
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>
        </div>

        <select name="em" id="em">
            <option value="">Edad_aprox</option>
            <option value="1">1 año</option>
            <option value="2">2 años</option>
            <option value="3">3 años</option>
            <option value="4">4 años</option>
            <option value="5">5 años</option>
            <option value="6">+ de 7 años</option>
        </select>
        </div>
        
        <select name="na" id="na">
            <option value="">Nivel de actividad</option>
            <option value="bajo">Bajo</option>
            <option value="medio">Medio</option>
            <option value="alto">Alto</option>
            
        </select>
        </div>
        
        <select name="er" id="er">
            <option value="">Espacio Requerido</option>
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>>
            
        </select>
        </div>
        <select name="ts" id="ts">
            <option value="">Puede estar solo</option>
            <option value="1">1 hora</option>
            <option value="2">2 horas</option>
            <option value="3">3 horas</option>
            <option value="4">+ de 4 horas</option>
          
        </select>
        </div>

              
      
        <input type="submit" value="Buscar">


    </form>

</div>

<div class="conte_padre">
    <?php 
    foreach ($pdo->query("SELECT * FROM mascotas") as $fila) {
    ?>

        <div class="hijo a">
        <img class="imagen-cuadro" src="http://cdn.lavozdesanjusto.com.ar/Imagenes/1200Image1534794eb6f149ba9ed94d6fa86fd45b.jpg" alt="">
        <a class="prueba" href="login.php">Conóceme</a>
        </div> 

        
    <?php
    }
    ?>
 </div>
<?php include 'pie.php'?>

    
</body>
</html>