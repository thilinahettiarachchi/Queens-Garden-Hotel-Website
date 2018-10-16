<?php	
	
$roomtype = $_POST["srtype"];
$roomqty = $_POST["srqty"];
$ac = $_POST["rac"];
$indate = $_POST["dindate"];
$outdate = $_POST["doutdate"];


        $conn = mysqli_connect("localhost", "root", "", "queens");
		
		if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }

		$sql = "insert into room(roomtype, roomqty, ac, indate, outdate) value('" . $roomtype . "','" . $roomqty . "','" . $ac . "','" . $indate . "','" . $outdate . "')";

		
        mysqli_query($conn, $sql);
        mysqli_close($conn);

?>