<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pick me!</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

        <script type="text/javascript">

        if (true) {

            function sureToApprove(id) {
                if (confirm("Are you sure you want to Approve this request?")) {
                    window.location.href = 'index.php?id=' + id + '&action= 1';
                }
            }

        }else{

            function sureToCancle(id) {
                if (confirm("Are you sure you want to Cancel this request?")) {
                    window.location.href = 'index.php?id=' + id + '&action= 0';
                }
            }

        }



        </script>
    
  </head>

  <body>
           <?php
           include 'menu.php';
          require_once '../includes/config.php';
          ?>

          <?php
         if (isset($_GET['id']) && isset($_GET['action'])) {

              $id = $_GET['id'];
              $action = $_GET['action'] == '1' ? 'Approved' : 'Pending';
              
              if($action == 'Approved') $action = 1; else $action = 0;

              $query = "UPDATE hire SET status = $action WHERE hire_id = '$id'";
              $result = $conn->query($query);
              var_dump($result);
              header('Location: index.php');
          }
          ?>


    <div class="container-fluid">
      <div class="row">

        <?php include 'menu.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <div class="row placeholders">
            <div class="col-md-3 col-md-offset-4 placeholder">
              <img src="../cars/driver/customer-1.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4 class ="col-md-4 col-md-push-3">ADMIN</h4>
            </div>
          </div>

          
          <h2 class="sub-header">Overview</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>#</th>
                    <th>Client Name</th>
                    <th>Client Phone</th>
                    <th>Car Booked</th>
                    <th>Driver Name</th>
                    <th>Rent</th>
                    <th>bKash ID</th>
                    <th>Date and Time</th>
                    <th>schedule</th>
                    <th>Status</th>
                    <th>Content Control</th>
                </tr>
              </thead>
                    <?php
                    
                    include '../includes/config.php';
                    
         $select = "SELECT h.hire_id, h.rent, h.start_time, h.end_time, h.status, h.bkash_tran_id, h.datetime, h.status, u.fname,
                    u.phone, c.car_name, c.car_type, d.driver_name FROM hire h, users u, cars c, driver d where h.car_id=c.car_id AND h.client_id=u.client_id AND h.driver_id = d.driver_id ORDER BY h.status DESC, h.hire_id ASC";

                    $result = $conn->query($select);
                    while ($row = $result->fetch_assoc()) {
                        
                        ?>

              <tbody>
                <tr>
                    <td><?php echo $row['hire_id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['driver_name'] ?></td>

                    <td><?php echo $row['car_Type'] . ' ' . $row['car_name'] ?></td>
                    <td><?php echo $row['rent'] ?></td>
                    <td><?php echo $row['bkash_tran_id'] ?></td>
                    <td><?php echo $row['datetime'] ?></td>
                     <td><?php  echo date('H:i', strtotime($row['start_time'])) .'-'.date('H:i', strtotime($row['end_time'])); ?></td>

                    <td><?php echo $row['status'] == 0 ? "Pending" : "Approved"; ?></td>

                     <td><?php if ($row['status'] != 1): ?><a class='btn btn-success' href="javascript:sureToApprove(<?php echo $row['hire_id']; ?>)" class="space" >Approve</a><a class='btn btn-info' href="#" > Delete</a></td>
                        <?php else: ?>
                      <a class='btn btn-danger' href="javascript:sureToCancle(<?php echo $row['hire_id']; ?>)" class="space"> Cancel</a>
                        <?php endif; ?></td>

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
    <script src="../js/A.js"></script>
    <script src="../js/bootstrap.js"></script>
 
  </body>
</html>
