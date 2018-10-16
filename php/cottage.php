<?php	
	
$ctpackage = $_POST["cpackage"];
$ctqty = $_POST["cqty"];
$ctmeal = $_POST["cmeal"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into cottage(ctpackage, ctqty, ctmeal) value('" . $ctpackage . "','" . $ctqty . "','" . $ctmeal . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close();

?>