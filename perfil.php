<link rel="stylesheet" href="estilos/hojaPerfil.css">
<?php
session_start(); #Esta funcion debe ser llamada antes de un output

?>

<?php

 $id=$_GET["id"];

 $pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
 $resultado=$pdo->query("SELECT * FROM mascotas WHERE id_masc='$id' ");
 $fila=$resultado->fetch();
 
 ?>
 

<body>

<?php include 'cabecera.php'?>
    
    <div class="cuadrito">
       <div class="seccion_arriba">
    
       <img id="imagen"  src="<?php echo $fila["imagen"]?>" alt="">                
       <div class="nav_imagen">

                <img onclick="cambiar_imagen(this)" src="<?php echo $fila["imagen"]?>" alt="">
                <img onclick="cambiar_imagen(this)" src="https://www.royalcanin.es/wp-content/uploads/2016/03/comportamiento-perro.jpg" alt="">
                <img onclick="cambiar_imagen(this)" src="https://seguros.elcorteingles.es/admin/assets/uploads/files/images/thumbnails_l/EL-PERRO-NO-BEBE-AGUA.jpg" alt="">

            </div>
        </div>
        <div class="seccion_abajo">
            <table class="tablita">
            <div class="name"><?php echo $fila["nombre_masc"] ?>
            </div>
        
            <tr>
                <th>Sexo</th>
                <th>Tamaño</th>
                <th>Peso</th>
                <th>Edad</th>
                <th>Nivel de actividad</th>
            </tr>

            <tr>
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
            <?php $estado=$fila["estado"]?>

            <?php if(isset($_SESSION["usuario"])){ 
               

                if($estado=="adoptado") { ?>
                <p>Estado: <?php echo $estado?></p>
                
                <?php } 
                else { ?>
                    
                <a class="btn" href="procesar_adoptYa.php?id=<?php echo $fila["id_masc"]?>">AdoptMe ya!</a>
                <?php } ?>

            <?php }

            else { 
                    
                if($estado=="adoptado") { ?>
                    <p>Estado: <?php echo $estado?></p>
                        
                    <?php } 
                else { ?>              

                    <a class="btn" href="login.php">AdoptMe ya!</a>
                <?php }
            } ?>

                           
        </div>
    </div>

    <script type="text/javascript">
        var contenedor=document.getElementById("imagen");
         function cambiar_imagen(image){
             contenedor.src=image.src;
    }
    </script>

<?php include 'pie.php'?>

</body>

</html>