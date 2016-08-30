
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rajshahi Rent A Car</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    </head>
    <body>

        <section class="">
            <?php
            include 'header.php';
            ?>

            <section class="caption up">
                <h2 class="caption" style="text-align: center">Select any Driver For Hire</h2>
                <h3 class="properties" style="text-align: center">Toyota - Mitsubishi - Hundai</h3>
            </section>
        </section><!--  end hero section  -->


        <section class="listings">
            <div class="wrapper">
                <ul class="properties_list">
                    <?php
                    include 'includes/config.php';
                    $sel = "SELECT * From driver ";
        
                    $sql = "SELECT status From hire";
                    $rs = $conn->query($sql);
                    $row = $rs->fetch_assoc();

                    $rs = $conn->query($sel);
                    $car = $_GET['id'];
                    while ($rws = $rs->fetch_assoc()) {

                        //$driver_id = $rws['driver_id'];
                        ?>
                        <li>
                             <a href="time_shedule.php?d_id=<?php echo $rws['driver_id'] ?>&c_id=<?php echo $car ?>" >
                                <img class="thumbnail" src="cars/driver/<?php echo $rws['driver_pic']; ?>" width="300" height="260">
                               
                            </a>
                          
                            <span class="price"><?php   if($row['status'] == 0) {echo 'Hierd';}else {echo "Available";} ?></span> 

                            <div class="property_details thumbnail color">
                                <h1>
                                    <a href="#"><?php echo 'Exeperience: ' . $rws['driver_exprience'] . ' Year\'s'; ?></a>
                                </h1>
                                <h2 >Driver Name: <span class="property_size"><?php echo $rws['driver_name']; ?></span></h2>
                            </div>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </div>
        </section>  <!--  end listing section  -->

        <div>

            <?php
            include 'footer.php';
            ?>
        </div>

    </body>
</html>






