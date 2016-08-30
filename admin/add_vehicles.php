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


    <script type="text/javascript">
        function sureToApprove(id) {
            if (confirm("Are you sure you want to delete this car?")) {
                window.location.href = 'delete_car.php?id=' + id;
            }
        }
    </script>

  </head>

  <body>
  <?php include 'menu.php'; ?>


    <div class="container-fluid">
      <div class="row">

        <?php include 'menu.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

   
          <h2 class="sub-header up">Vechicle Management</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>#</th>
                    <th>Vehicle Make</th>
                    <th>Car Type</th>
                    <th>Hire Price</th>
                    <th>Content Control</th>
                </tr>    
              </thead> 
                <?php
                    include '../includes/config.php';
                    $select = "SELECT * FROM cars WHERE status = 'Available'";
                    $result = $conn->query($select);
                    while ($row = $result->fetch_assoc()) {
                ?>

              <tbody>
                 <tr>
                 <td><?php echo $row['car_id'] ?></td>
                <td><a href="#"><?php echo $row['car_type'] ?></a></td>
                <td><?php echo $row['car_name'] ?></td>
                <td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
                <td><a href="javascript:sureToApprove(<?php echo $row['car_id']; ?>)" class="space">Delete</a><a href="#" class="space"> Edit</a></td>
                </tr>
              </tbody>

                    <?php
                                    }
                    ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
 
  </body>
</html>
