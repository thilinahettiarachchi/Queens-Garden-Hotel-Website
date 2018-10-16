<?php



$uname = $_REQUEST["txtusername"];
$pwd = $_REQUEST["txtpw"];
	
$conn = $conn = mysqli_connect("localhost", "root", "", "queens");
$db = mysql_select_db("queens", $conn);
$sql = "SELECT * FROM reg WHERE username='$uname' AND password = '$pwd'";



$result = mysqli_query($conn, $sql);
if(mysql_num_rows($result) == 0){
	echo"Please Enter all fields";
}
mysqli_close();

?>