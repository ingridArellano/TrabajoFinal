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
        <h1>Campañas AdoptMe</h1>
        <p>En esta sección encontrarás información sobre las campañas de esterilización realizadas a nivel nacional, blogs, entre otros aspectos.</p>
      </header>

      <main class="mainn">
        <div class="singleBlog">
          <img src="thum1.jpg" alt="">
          <div class="blogContent">
            <p><span>Campañas de esterilización de mascotas </span></p>
            <a href="entry.php" class="btn">Leer más</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum2.jpg" alt="">
          <div class="blogContent">
            <p><span>Alianza con Pacho Cavero</span></p>
            <a href="http://panchocavero.com/category/uncategorized/" class="btn">Leer más</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum3.jpg" alt="">
          <div class="blogContent">
            <p><span>Blogs recomendados</span></p>
            <a href="http://www.vetplace.pe/novedades/" class="btn">Leer más</a>
          </div>
        </div>
        <div class="singleBlog">
          <img src="thum4.jpg" alt="">
          <div class="blogContent">
            <p><span>Más noticias</span></p>
            <a href="http://www.mascoteros.com/blog/" class="btn">Leer más</a>
          </div>
        </div>
      </main>
    </div>
  </section>
  <?php include 'pie.php'?>
</body>
</html>
