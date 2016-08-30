<?php
session_start();
error_reporting("E-NOTICE");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Header</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">


  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">


      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="index.php"> Pick Me!</a>
        </div>
        

        <div id="navbar" class="navbar-collapse collapse">

        <?php
            if (!$_SESSION['email'] && (!$_SESSION['pass'])) {
        ?>

          <ul class="nav navbar-nav position col-md-push-6 col-md-6">
           
            <li><a href="car-rent.php">Home</a></li>
            <li><a href="index.php">Rent Cars</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Option <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="account.php">Login</a></li>
              </ul>
            </li>
          </ul>

            <?php
                } else {
            ?>


            <ul class="nav navbar-nav position col-md-push-6 col-md-6">
           
            <li><a href="index.php">Home</a></li>
            <li><a href="status.php">View Status</a></li>
            <li><a href="message_admin.php">Messege Admin</a></li>           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Option <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin/logout.php">Logout</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
              </ul>
            </li>
          </ul>

          <?php
            }
          ?>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/A.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
