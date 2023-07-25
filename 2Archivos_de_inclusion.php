<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>¡Bienvenido a mi página de inicio!</h1>
  <p>Algún texto.</p>
  <p>Algo más de texto.</p>
  <?php include 'footer.php';?>

  <br>
  <hr>
  <br>

  <?php
    echo '<a href="/default.asp">Home</a> -
    <a href="/html/default.asp">HTML Tutorial</a> -
    <a href="/css/default.asp">CSS Tutorial</a> -
    <a href="/js/default.asp">JavaScript Tutorial</a> -
    <a href="default.asp">PHP Tutorial</a>';
  ?>

  <br>
  <hr>
  <br>

  <div class="menu">
   <?php include 'menu.php';?>
  </div>

  <h1>¡Bienvenido a mi página de inicio!</h1>
  <p>Algún texto.</p>
  <p>Algo más de texto.</p>

  <br>
  <hr>
  <br>

  <h1>¡Bienvenido a mi página de inicio!</h1>
  <?php include 'vars.php';
    echo "Tengo un $color $car.";
  ?>

  <br>
  <hr>
  <br>

  <h1>Welcome to my home page!</h1>
  <?php include 'noFileExists.php';
    echo "I have a $color $car.";
  ?>

</body>
</html>