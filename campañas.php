<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CSS Grid System | Responsive Blog Section Using CSS3 Grid</title>
  <link rel="stylesheet" href="estilo_campañas.css">
</head>
<body>
<?php include 'cabecera.php'?>
  <section>
    <div class="container">
      <header class="headercito">
        <h1>Preguntas Frecuentes</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laborum, officia delectus corrupti modi natus?</p>
      </header>

      <main class="mainn">
        <div class="singleBlog">
          <img src="thum1.jpg" alt="">
          <div class="blogContent">
            <h3>A Chair of Million <span>Art</span></h3>
            <p>By <a href="#">Jhon Doe</a> | <a href="#">Nov 21, 2018</a></p>
            <a href="https://blog.cuidamimascota.com/cuidados-de-un-perro-cuidado-de-mascotas/" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum2.jpg" alt="">
          <div class="blogContent">
            <h3>A Chair of Million <span>Photography</span></h3>
            <p>By <a href="#">Jhon Doe</a> | <a href="#">Nov 21, 2018</a></p>
            <a href="entry.php" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum3.jpg" alt="">
          <div class="blogContent">
            <h3>A Chair of Million <span>Design</span></h3>
            <p>By <a href="#">Jhon Doe</a> | <a href="#">Nov 21, 2018</a></p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum4.jpg" alt="">
          <div class="blogContent">
            <h3>A Chair of Million <span>Life</span></h3>
            <p>By <a href="#">Jhon Doe</a> | <a href="#">Nov 21, 2018</a></p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
      </main>
    </div>
  </section>
  <?php include 'pie.php'?>
</body>
</html>
