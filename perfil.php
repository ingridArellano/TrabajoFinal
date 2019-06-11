<link rel="stylesheet" href="estilos/hojaPerfil.css">

<?php
 $id=$_GET["id"];
 $pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
 $resultado=$pdo->query("SELECT * FROM mascotas WHERE id_masc='$id' ");
 $fila=$resultado->fetch();
 
 ?>
<body>
<?php include 'cabecera.php'?>
<h1>AdoptMe</h1>
    
    <table class="tablita">

    <tr>
        <th>Pefil AdoptMe</th>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Tamaño</th>
        <th>Peso</th>
        <th>Edad</th>
        <th>Nivel de actividad</th>
    </tr>
    
    
        <tr>
            <td>
            <img class="imagen" src="http://cdn.lavozdesanjusto.com.ar/Imagenes/1200Image1534794eb6f149ba9ed94d6fa86fd45b.jpg" alt="">
            </td>
            <td>
            <?php echo $fila["nombre_masc"] ?>
            <td>
            <?php echo $fila["sexo_masc"] ?>
            </td>
            <td>
            <?php echo $fila["tamaño_masc"] ?>
            </td>
            <td>
            <?php echo $fila["peso_masc"] ?>
            </td>
            <td>
            <?php echo $fila["edad_masc"] ?>
            <td>
            <?php echo $fila["nivel_act"] ?>
            </td>
            

        </tr>
    
    </table>
    <div class="centrar">
    <a class="aceptar" href="inscribete.php?id=<?php echo $registroMascota["id_masc"]?>">AdoptMe ya!</a>
    </div>
    <?php include 'pie.php'?>
</body>

</html>