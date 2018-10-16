<?php	
	
$package = $_POST["spackage"];
$foodqty = $_POST["sfqty"];
$meal = $_POST["smeal"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into food(package, foodqty, meal) value('" . $package . "','" . $foodqty . "','" . $meal . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close();

?>