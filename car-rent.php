<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rent A Car</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>

        <section class="">
            <?php
            include 'header.php';
            ?>

            <section class="caption up">
                <h2 class="caption" style="text-align: center">Find Your Dream Cars For Hire</h2>
                <h3 class="properties" style="text-align: center">Toyota - Mitsubishi - Hundai</h3>
            </section>
        </section><!--  end hero section  -->


        <section class="listings">
            <div class="wrapper">
                <ul class="properties_list">
                    <?php
                    include 'includes/config.php';
                    $sel = "SELECT * FROM cars WHERE status = 'Available'";
                    $rs = $conn->query($sel);
                    while ($rws = $rs->fetch_assoc()) {
                        ?>
                        <li>
                             <a href="driver_book.php?id=<?php echo $rws['car_id'] ?>" >
                                <img class="thumbnail" src="cars/<?php echo $rws['image']; ?>" width="300" height="230">
                               
                            </a>
                            <div class="price"><?php echo 'Taka:' . $rws['hire_cost']; ?></div>
                            
                            <div class="property_details thumbnail color">
                                <h1>
                                    <a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Company: ' . $rws['car_type']; ?></a>
                                </h1>
                                <h2><?php echo 'Car Name/Model: '.$rws['car_name']; ?></h2>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>	<!--  end listing section  -->

        <div>

            <?php
            include 'footer.php';
            ?>
        </div>

    </body>
</html>