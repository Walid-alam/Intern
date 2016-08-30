<?php

include '../includes/config.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM driver WHERE driver_id = '$id'";
$result = $conn->query($query);
if ($result === TRUE) {
    echo "<script type = \"text/javascript\">
					alert(\"Driver Successfully Removed\");
					window.location = (\"add_driver.php\")
				</script>";
}
?>
