<?php	
	
$hpackage = $_POST["htpackage"];
$hqty = $_POST["txtmembers"];
$hmeal = $_POST["htmeal"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into hall(hpackage, hqty, hmeal) value('" . $hpackage . "','" . $hqty . "','" . $hmeal . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close();

?>