<?php
$sexo=$_POST["sexo"];
$tamaño=$_POST["tamaño"];
$edad_masc=$_POST["em"];
$nivel_act=$_POST["na"];
$espacio_re=$_POST["er"];
$tiempo_solo=$_POST["ts"];




$pdo = new PDO("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");

#PASO3: CONSTRUIR COMANDO INSERTAR
foreach ($pdo->query("SELECT * FROM mascota where ") as $fila)
{
?>
    
        <?php echo $fila["nombre_mascota"] ?>
        
        
        <?php echo $fila["sexo_mascota"] ?>
       
        <?php echo $fila["edad_masc"] ?>
       
        
         <a href="perfil.php?id=<?php echo $fila["id_mascota"]?>">Conoceme</a>
        
      
         <a href="perfil.php?id=<?php echo $fila["id_mascota"]?>">BORRAR</a>
        

            
<?php
} 






#PASO4: EJECUTAR COMANDO 
$pdo->query($sql);
    header("Location:adopcion.php");

?>