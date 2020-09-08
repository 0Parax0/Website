<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="/WWW/CSS/stylesheet.css">
  <head>
    <meta charset="utf-8">
    <title>Side1</title>
  </head>
  <body>
    <h2>Dette er side 1</h2>
    <?php $path = $_SERVER['DOCUMENT_ROOT'];$path .= "/WWW/Includes/Nav.php";include_once($path);?>


    <div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
</div>



  </body>
</html>
