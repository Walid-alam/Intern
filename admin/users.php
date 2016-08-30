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
                if (confirm("Are you sure you want to Approve this request?")) {
                    window.location.href = 'users.php?id=' + id + '&action=approve';
                }
            }
            function sureToDeactivate(id) {
                if (confirm("Are you sure you want to Deactivate this request?")) {
                    window.location.href = 'users.php?id=' + id + '&action=deactivate';
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
              $action = $_GET['action'] == 'approve' ? 'Approved' : 'Pending';

              $query = "UPDATE users SET status = '$action' WHERE client_id = $id";
              $result = $conn->query($query);
              var_dump($result);
              header('Location: users.php');
          }
          ?>


    <div class="container-fluid">
      <div class="row">

        <?php include 'menu.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

   
          <h2 class="sub-header up"> User Control</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>#</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Status</th>
                    <th>Content Control</th>
                </tr>    
              </thead> 
                <?php
                  include '../includes/config.php';
                  $select = "SELECT  client_id, fname, email, status FROM users WHERE access_level = 0";
                  $result = $conn->query($select);
                  while ($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                          <td><?php echo $row['client_id'] ?></td>
                          <td><?php echo $row['fname'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['status'] ?></td>
                          <td><?php if ($row['status'] != 'Approved'): ?>

                            <a href="javascript:sureToApprove(<?php echo $row['client_id']; ?>)" class="ico del">Approve</a>
                                <?php else: ?>
                            <a href="javascript:sureToDeactivate(<?php echo $row['client_id']; ?>)" class="ico del">Deactivate</a>
                                <?php endif; ?>

                          </td>
                      </tr>
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
