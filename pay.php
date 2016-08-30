<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rajshahi Rent A Car</title>

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <section class="">
            <?php
            include 'header.php';
            ?>

            <section class="caption up">
                <h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
                <h3 class="properties" style="text-align: center">Toyota - Mitsubishi - Hundai</h3>
            </section>
        </section><!--  end hero section  -->


        <section class="listings">
            <div class="wrapper">
                <ul class="properties_list">
                    <h3 style="text-decoration: underline">Make Payments Here</h3>

                    <form method="post">
                        <table>
                            <tr>
                                <td>bKash Transaction ID:</td>
                                <td><input type="text" name="bKash" required></td>                               
                            </tr>

                            <?php

                                 $time_st =  $_SESSION['t1'];
                                 $time_end = $_SESSION['t2'];

                                 $exp1 = explode(" ", $time_st);
                                 $exp2 = explode(" ", $time_end);
                                 //print_r($exp);

                                 $a1 = str_replace(":", "", $exp1[1]);
                                 $a2 = str_replace(":", "", $exp2[1]);

                                 $time1 = (int)$a1;
                                 $time2 = (int)$a2;

                                 //$time_st_final = date('H:i:s', $time_st);


                               //  $time_st_final = time( $time_st);
                                // $time_end_final = time( $time_end);

                                 //session_destroy();

                                 //$time1 = date('H:i:s', strtotime($time_st));
                                 //$time2  = date('H:i:s', strtotime($time_end));


                            // $time_st = 100;
                            // $time_end = 200;
                            
                            ?>

                            <tr>
                                <td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
                            </tr>
                        </table>
                        <h2><?php echo $time_st.'/'. $time_end.'/';     
                           
                            //echo// gettype($time1).'/'. gettype($time2).'/';
                            echo $time1 .'/'. gettype($time1).'/'.$time2 .'/'. gettype($time2); 
                        


                         ?></h2>
                    </form>
                    
                    <?php

                    if (isset($_POST['pay'])) {
                        

                        include 'includes/config.php';
                        $bKash = $_POST['bKash'];
                        //$phone = $_POST['phoneno'];

                        $id = $_SESSION['id'];

                        $car_id = $_GET['carid'];
                        $drive_id = $_GET['driv_id'];



                        $sel = "SELECT * FROM cars WHERE car_id =" . $car_id;

                        $rs = $conn->query($sel);
                        $rws = $rs->fetch_assoc();

                        $rent = $rws['hire_cost'];

                        $qry = "INSERT INTO hire(client_id, car_id, driver_id, Rent, bkash_tran_id, start_time, end_time, status) VALUES ($id,$car_id,$drive_id,$rent,$bKash,$time1,$time2,'PENDING')";
                        $result = $conn->query($qry);

                        if ($result == TRUE) {
                            echo "<script type = \"text/javascript\">
                                            alert(\"Payment Successfully Done. Wait for Admin Approval\");
                                            window.location = (\"wait.php\")
                                            </script>";
                        } else {
                            echo "<script type = \"text/javascript\">
                                            alert(\"Payment Failed. Try Again\");
                                            window.location = (\"pay.php\")
                                            </script>";
                        }
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