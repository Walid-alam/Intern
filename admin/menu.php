<?php
error_reporting("E-NOTICE");
?>
<?php
session_start();
if (!$_SESSION['uname'] && ($_SESSION['access'] < 9)) {
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style2.css" rel="stylesheet">

</head>
<body>


  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Pick me!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="add_driver.php">Driver Mangement</a></li>
            <li><a href="add_vehicles.php">Vehicle Managemnt</a></li>
            <li><a href="add_cars.php">Add Vehicle </a></li>
            <li><a href="add_emp.php">Add Driver</a></li>
            <li><a href="users.php">User Control</a></li>
            <li><a href="message.php">Messages</a></li>
          </ul>
        </div>
