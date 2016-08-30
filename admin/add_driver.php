<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pick me!</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style2.css" rel="stylesheet">


    <script type="text/javascript">
        function sureToApprove(id) {
            if (confirm("Are you sure you want to delete this car?")) {
                window.location.href = 'delete_driver.php?id=' + id;
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

          <h2 class="sub-header up">Driver Management</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>#</th>
                    <th>Driver Pic</th>
                    <th>Driver Name</th>
                    <th>Driver Experience</th>
                    <th>Content Control</th>
                </tr> 
              </thead> 
              <?php
                include '../includes/config.php';
                $select = "SELECT * FROM driver";
                $result = $conn->query($select);
                while ($row = $result->fetch_assoc()) {
                ?>

              <tbody>
                 <tr>
                    <td><?php echo $row['driver_id'] ?></td>
                    
                    <td>
                        <img class="img-rounded" src="../cars/Driver/<?php echo $row['driver_pic']; ?>" width="50" height="50">
                    </td>

                    <td><?php echo $row['driver_name'] ?></td>
                    <td><?php echo $row['driver_exprience'] ?></td>
                    <td><a href="javascript:sureToApprove(<?php echo $row['driver_id']; ?>)" class="space">Delete</a><a href="#" class="space"> Edit</a></td>
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
