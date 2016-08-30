<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rajshahi Rent A Car</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
    
        <section class="">


            <?php
            include 'header.php';
            ?>

            <section class="caption up">
                <h2 class="caption" style="text-align: center">Complete your Step For Hire</h2>
                <h3 class="properties" style="text-align: center">Toyota - Mitsubishi - Hundai</h3>
            </section>
        </section><!--  end hero section  -->

        <section class="listings">
            <div class="wrapper">

                <ul class="properties_list">
                    <?php
                    include 'includes/config.php';
                      
                                        
                    if($_REQUEST['car'] == 2){


                        $var1 = $c[0];
                        $var2 = $c[1];

                    }else{


                        if(isset($_POST['timeSave'])){

                            session_start();

                            $time_s = $_POST['s_time'];
                            $time_e = $_POST['e_time'];

                            $var1 = $_SESSION['car'];
                            $var2 = $_SESSION['driver'];




                        }else{
                            header('Location:time_shedule.php');

                        }

                    }

                        $sel = "SELECT * FROM cars WHERE car_id =" . $var1;
                        $rs = $conn->query($sel);
                        $rws = $rs->fetch_assoc();

                        $sel2 = "SELECT * FROM driver WHERE driver_id =" . $var2;
                        $rs2 = $conn->query($sel2);
                        $rws2 = $rs2->fetch_assoc();


                    ?>
                    <li>
                        <a href="#">
                            <img class="thumbnail" src="cars/<?php echo $rws['image']; ?>" width="295" height="250">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img class="thumbnail" src="cars/driver/<?php echo $rws2['driver_pic']; ?>" width="250" height="250">
                        </a>
                    </li>


                    <?php

                    session_start();

                    //2016-8-17 ->10.50
                    //2016-8-25 ->18.50


                        $start_t = $time_s; //2016-8-17 10.50
                        //$date1 = date('d-m-Y', strtotime($start_t));  //2016-8-17
                        //$time1 = date('H:i:s', strtotime($start_t));  //10.50


                        $_SESSION['t1'] = $time_s;
                        


                        $day1 = strtotime($date1); 
                        $d1 = date('d', $day1); //17


                        $start_e = $time_e; //

                       // $date2 = date('d-m-Y', strtotime($start_e));
                       // $time2 = date('H:i:s', strtotime($start_e));

                        $_SESSION['t2'] = $time_e;

                        $day2 = strtotime($date2);
                        $d2 = date('d', $day2);
                        $day_count = $d2 - $d1;
                        $time_count = $time2 - $time1;


                        echo gettype($time_s). '/'. gettype($time_e) .'/'. $time_s .'/'. $time_e ;

                        


                    ?>


                    <h3>Confirm to Hire <?php echo $rws['car_name']; ?> For 
                    <?php 
                        if($day_count == 0){
                            
                        }else{
                            echo $day_count .' Day\'s';
                        } 
                    ?>
                     
                    <?php 

                        if($time_count == 0){
                            
                        }else{
                            echo 'And '.$day_count .' Hour\'s only';
                        }  

                     ?> </h3>


                    <?php
                    if (!$_SESSION['email']) {

                            header('Location:account.php?value=1');                       
                        ?>

                        <?php
                    } else {
                        ?>
                        
                        <a type="button" class="btn btn-primary" href="pay.php?carid=<?php echo $rws['car_id']; ?>&driv_id=<?php echo $rws2['driver_id']; ?>"> Confirm</a>

                        <a type="button" class="btn btn-danger" href="index.php">Cancle</a>
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


        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>



        <script type="text/javascript">
            jQuery('#datetimepicker2').datetimepicker({
              datepicker:false,
              format:'H:i'
            });

        </script>

    </body>
</html>