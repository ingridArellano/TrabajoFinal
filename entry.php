<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/entry_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&display=swap">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php include 'cabecera.php'?>
<div class="container">
    <div class="holder">
      <h2>Responsive Table</h2>
      <p>Ipsa expedita odio autem mollitia fugiat ad repudiandae, a, tempore voluptatibus eveniet maxime eligendi suscipit! Nemo, veritatis dolore nostrum exercitationem dolor illum.</p>
      <div class="responsiveTbl">
        <table>
          <thead>
            <tr>
              <th>Rank</th>
              <th>Full Name</th>
              <th>Starting Price</th>
              <th>Review</th>
              <th>Hiring</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Smith</td>
              <td><span class="price">£40 / hr</span></td>
              <td>9.9</td>
              <td><a href="#" class="btn">Hire me</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>William Taylor</td>
              <td><span class="price">£38 / hr</span></td>
              <td>9.5</td>
              <td><a href="#" class="btn">Hire me</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>George Wilson</td>
              <td><span class="price">£35 / hr</span></td>
              <td>9.2</td>
              <td><a href="#" class="btn">Hire me</span></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Ellen Walker</td>
              <td><span class="price">£39 / hr</span></td>
              <td>9.1</td>
              <td><a href="#" class="btn">Hire me</span></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Emma Hall</td>
              <td><span class="price">£35 / hr</span></td>
              <td>9.0</td>
              <td><a href="#" class="btn">Hire me</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>




<?php include 'pie.php'?> 
</body>
</html>