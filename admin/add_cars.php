<?php
include '../includes/config.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style2.css" rel="stylesheet">




  </head>

  <body>
  <?php include 'menu.php'; ?>


    <div class="container-fluid">
      <div class="row">

        <?php include 'menu.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


          <h2 class="sub-header up">Add new Vechicle </h2>

                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Vehicle Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="car_name" placeholder="Name" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Vehicle Make</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="car_type" placeholder="Company" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Vehicle Hire Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="hire_cost" placeholder="Price/cost" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">In Terms of Passenger Seats</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="capacity" placeholder="seats number" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">Upload Image file</label>
                        <input type="file" id="exampleInputFile" name="image" required>
                        <p class="help-block">Not more then 5MB.</p>
                      </div>
                      <div class="checkbox">

                      </div>
                      <button type="submit" class="btn btn-primary col-md-push-4 col-md-1" name="send" >Submit</button>
                </form>


             <?php
                if (isset($_POST['send'])) {

                    $target_path = "../cars/";
                    $target_path = $target_path . basename($_FILES['image']['name']);
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {

                        $image = basename($_FILES['image']['name']);
                        $car_name = $_POST['car_name'];
                        $car_type = $_POST['car_type'];
                        $hire_cost = $_POST['hire_cost'];
                        $capacity = $_POST['capacity'];

                        $qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
                                        VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
                        $res = $conn->query($qr);
                        if ($res === TRUE) {
                            echo "<script type = \"text/javascript\">
                                alert(\"Vehicle Succesfully Added\");
                                window.location = (\"add_vehicles.php\")
                                </script>";
                        }
                    } else
                        'Failed';
                }
                ?>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
 
  </body>
</html>
