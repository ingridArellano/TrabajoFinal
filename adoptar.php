<?php
$pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
$mysqli = new mysqli("localhost", "root", "", "AdoptMe");

$where="";
$sexo=$_POST['sexo_masc'];
$tamaño=$_POST['tamaño_masc'];

if (isset($_POST['buscar'])){

	if (!isset($_POST['tamaño_masc']))
	{
		$where="WHERE sexo_masc='$sexo' ";
	}

	else if (!isset($_POST['sexo_masc']))
	{
		$where="WHERE tamaño_masc='$tamaño' ";
	}

	else
	{
		$where="WHERE tamaño_masc= '$tamaño' and sexo_masc='$sexo'";
	}
}


$mascotas="SELECT * FROM mascotas $where";
$resMascotas=$pdo->query($mascotas);
$resMascota=$pdo->query($mascotas);

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
    <form method="POST">
        <div>
        <select name="sexo_masc" id="sexo">
        <option value="">Sexo</option>
        <?php
			while ($registroMascotas = $resMascotas->fetch_array(MYSQLI_BOTH)) {
				echo '<option value="'.$registroMascotas['sexo_masc'].'">'.$registroMascotas['sexo_masc'].'</option>';
				}
		?>
        </select>
        </div>
        <select name="tamaño_masc" id="tamaño">
            <option value="">Tamaño</option>
					<?php
						while ($registro2 = $resMascotas->fetch()) {
						echo '<option value="'.$registro2['tamaño_masc'].'">'.$registro2['tamaño_masc'].'</option>';
						}
					?>
        </select>
        <br>
        </div>
        <button name="buscar" type="submit">Buscar</button>
<!--
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

-->
    </form>

</div>

<div class="conte_padre">
    <?php 
    while ($registroMascota = $resMascota->fetch()){
    ?>

        <div class="hijo a">
        <img class="imagen-cuadro" src="http://cdn.lavozdesanjusto.com.ar/Imagenes/1200Image1534794eb6f149ba9ed94d6fa86fd45b.jpg" alt="">
        <?php echo $registroMascota['nombre_mascota'] ?>
        <a class="prueba" href="login.php">Conóceme</a>
        </div> 

        
    <?php
    }
    ?>
 </div>
<?php include 'pie.php'?>

    
</body>
</html>