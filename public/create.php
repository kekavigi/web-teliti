<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bare - Start Bootstrap Template</title>
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

    <?php
      /**
       * Use an HTML form to create a new entry in the
       * users table.
       *
       */
      
      require "../config.php";
      require "../common.php";
      
      if (isset($_POST['submit'])) {
        if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
      
        try  {
          $connection = new PDO($dsn, $username, $password, $options);
          
          $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "age"       => $_POST['age'],
            "location"  => $_POST['location']
          );
      
          $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
          );
          
          $statement = $connection->prepare($sql);
          $statement->execute($new_user);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
      }
      ?>
    <?php if (isset($_POST['submit']) && $statement) : ?>
    <blockquote><?php echo escape($_POST['firstname']); ?> successfully added.</blockquote>
    <?php endif; ?>
    
    <h2>Add a user</h2>

    <form method="post">
      <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname">
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname">
      <label for="email">Email Address</label>
      <input type="text" name="email" id="email">
      <label for="age">Age</label>
      <input type="text" name="age" id="age">
      <label for="location">Location</label>
      <input type="text" name="location" id="location">
      <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back to home</a>
  </body>

