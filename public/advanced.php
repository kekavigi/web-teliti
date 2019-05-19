<!DOCTYPE html>
<html lang="en">
  <?php require "../codetransfer.php"; ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>+_+</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">+_+</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="advanced.php">Advanced</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Create</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="update.php">Update</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete.php">Delete</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Masthead -->
  <header class="masthead text-black text-center">
    <br>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Lorem Ipsum!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="post" action="result.php">
            <div class="form-row">
              <div class="col-12 col-md-10 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-lg" name="kode" placeholder="Kode SQL?">
              </div>
              <div class="col-12 col-md-2">
                <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
                <button type="submit" name="submit" class="btn btn-block btn-lg btn-primary">Go</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
          
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

