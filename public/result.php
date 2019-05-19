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


    <!-- Page Content -->
<?php  
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Result</h1>
          <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
        </div>
      </div>
    </div>

<div class="table-responsive">
    <table class="table table-hover table-sm">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>Age</th>
          <th>Location</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $row) : ?>
        <tr>
          <td><?php echo escape($row["id"]); ?></td>
          <td><?php echo escape($row["firstname"]); ?></td>
          <td><?php echo escape($row["lastname"]); ?></td>
          <td><?php echo escape($row["email"]); ?></td>
          <td><?php echo escape($row["age"]); ?></td>
          <td><?php echo escape($row["location"]); ?></td>
          <td><?php echo escape($row["date"]); ?> </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
</div>

    <?php } else { ?>
      	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h3>Oops! data not found</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
			<h2>we are sorry, but the data you requested was not found</h2>
		</div>
	</div>
    <?php } 
} ?> 
        
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
