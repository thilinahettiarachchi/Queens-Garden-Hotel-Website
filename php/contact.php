<?php	
	
$cfname = $_POST["txtcname"];
$cfemail = $_POST["txtcemail"];
$cftel = $_POST["txtctel"];
$cfarea = $_POST["textarea"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into contact(cfname, cfemail, cftel, cfarea) value('" . $cfname . "','" . $cfemail . "','" . $cftel . "','" . $cfarea . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close();

?>