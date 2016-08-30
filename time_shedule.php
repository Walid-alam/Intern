<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rajshahi Rent A Car</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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

        <div class="container">
            <form action="process_pay.php"  method="post" class="form-horizontal"  role="form">
                <fieldset>
                    <div class="form-group">
                        <label for="dtp_input1" class="col-md-2 control-label">Start Time Picking</label>

                        <div class='input-group date' id='datetimepicker6'>
                            <input type='text' class="form-control" value="" name="s_time"/>

                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                        <br/>
                    </div>


                    <div class="form-group">
                        <label for="dtp_input1" class="col-md-2 control-label">End Time Picking</label>

                        <div class='input-group date' id='datetimepicker7'>
                            <input type='text' class="form-control" value="" name="e_time" />

                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                        <br/>
                    </div>
                </fieldset>


                <?php
                session_start();

                $var1 = $_GET['c_id'];
                $var2 = $_REQUEST['d_id'];

                $_SESSION['car'] = $var1;
                $_SESSION['driver'] = $var2;


                ?>


                <input type="submit" class="btn btn-primary" name="timeSave" value="Continue" />

                <a type="button" class="btn btn-danger" href="index.php">Cancle</a> 

            </form>



        </section>	<!--  end listing section  -->

        <div>

            <?php
            include 'footer.php';
            ?>
        </div>

        <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.js" ></script>
        

        <script type="text/javascript">

            $(function () {
                $('#datetimepicker6').datetimepicker();
                $('#datetimepicker7').datetimepicker({
                    useCurrent: false //Important! See issue #1075
                });
                $("#datetimepicker6").on("dp.change", function (e) {
                    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                });
                $("#datetimepicker7").on("dp.change", function (e) {
                    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                });
            });


        </script>

    </body>
</html>