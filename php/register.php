<?php	
	
$fname = $_POST["txtfname"];
$lname = $_POST["txtlname"];
$uname = $_POST["txtun"];
$email = $_POST["txtemail"];
$cemail = $_POST["txtcemail"];
$pwd = $_POST["txtpwd"];
$cpwd = $_POST["txtcpwd"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into reg(fname, lname, uname, email, cemail, pwd, cpwd) value('" . $fname . "','" . $lname . "','" . $uname . "','" . $email . "','" . $cemail . "','" . $pwd . "','" . $cpwd . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close();

?>

