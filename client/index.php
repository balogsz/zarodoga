<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Jumbotron Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">
    <link rel="stylesheet" href="signin.css">
    
    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    

    
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">💅</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?prog=rolunk.php">Rólunk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?prog=kapcsolat.php">Kapcsolat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Szolgáltatások</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php">almenü1</a>
          <a class="dropdown-item" href="index.php">almenü2</a>
          <a class="dropdown-item" href="index.php">almenü3</a>
        </div>
      </li>
    </ul>
    
    <a class="nav-link btn btn-outline-light my-2 my-sm-0" href="index.php?prog=login.php">Login</a>
    <a class="nav-link btn btn-outline-light my-2 my-sm-0" href="index.php?prog=register.php">Register</a>
    
  </div>
</nav>

<main role="main">
  <?php
    if(isset($_GET['prog']))
      include $_GET['prog'];
    else
      include ('fooldal.php');
  ?>
</main>

<footer class="container">
  <p>&copy; Company 2017-2022</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
  <script src="menu.js"></script>
</html>
