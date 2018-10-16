<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/subtemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Queens Garden Hotel</title>
<!-- InstanceEndEditable -->
<link href="../css/WebStyles.css" rel="stylesheet" type="text/css" />
<link href="../css/slide.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="hotel">
<script type="text/javascript" src="../js/QuennsJS.js"></script>

  <header>
        <a href="../s" id="logo"></a>
        <nav>
            <ul class="showing">
                <a href="../Index.html"><li>BACK TO HOME</li></a>
                <a href="../html/room.html"><li>ROOM</li></a>
                <a href="../html/food.html"><li>FOOD & BEVERAGES</li></a>
                <a href="../html/cottages.html"><li>COTTAGES </li></a>
                <a href="../html/hall.html"><li>RECEPTION HALLS</li></a>
            </ul>
            <div class="handle">Menu</div>
      </nav>
</header>><!-- InstanceBeginEditable name="EditRegion2" -->
<section id="pagecontent">

<br /><br /><br /><h1><b>Room Reservation</b></h1>

<div class="container"><br />

    <div class="box">
			<form  action="../php/room.php" method="post" autocomplete="on"> 
			  <h1> Reserve Details </h1>
				<table width="503" height="112" border="1">
				  <tbody>
                    <tr height="40">
				      <td width="330"> Room Type			          </td>				      
                      <td width="78"> <select name="srtype" id="reserve">
                                      <option value="typeA">Type A</option>
                                      <option value="typeB">Type B</option>
                                      <option value="typeC">Type C</option>
                                      <option value="typeD">Type D</option>
                                      <option value="typeE">Type E</option>
                                      <option value="typeF">Type F</option>
                                      <option value="typeG">Type G</option>
                                      <option value="typeH">Type H</option>
                                      <option value="typeI">Type I</option>
                                      <option value="typeJ">Type J</option>
                                      <option value="typeK">Type K</option>
                                      <option value="typeL">Type L</option>
                                      </select> 
                                      </td>			        
                    </tr>
                    <tr height="40">
				      <td width="330"> Quantity			          </td>
                      <td width="78"> <select name="srqty" id="reserve" >
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      </select> 
                                      </td>			        
                    </tr>
				    <tr height="40">
				      <td width="330"> Room Condition			          </td>
				      <td width="78">
                      <input type= "Radio" checked="checked" name="rac"> AC 
                      <input type= "Radio" name="ac"> Non AC 
                      </td>
			        </tr>
				    <tr height="40">
				      <td width="330"> Checked In Date                         </td>
				      <td><input name="dindate" type="date" required="required" id="reserve" 
                      size="50"/></td>
			        </tr>
                    <tr height="40">
				      <td width="330"> Checked Out Date                        </td>
				      <td><input name="doutdate" type="date" required="required" id="reserve" 
                      size="50"/></td>
			        </tr>
                    </tbody>
			  </table>
              
                      <span class="ok button">
                      <input type="submit" value="OK" id="button1"/>
                      </span>
                     
			</form>
            <br /><br />
            </div>
        </div>  <br /><br /><br />
</section>




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
        mysqli_close();

?>

<!-- InstanceEndEditable -->
<footer>
            <section>       
                <h3><b>Contact Details</b></h3>
                <p><b>TEL:071-4554554</b><br /><br />
                NO:127<br />
                Galle Road<br />
                Colombo 03<br />
                queensgardeninfo.com</p>
            </section>
            <section>                
                <h3>Connect With Us</h3>
                <ul class="social">
                     <li><a href="../s"><img src="../images/resize images/facebook.png" /></a></li>
                     <li><a href="../s"><img src="../images/resize images/googleplus.png" /></a></li>
                     <li><a href="../s"><img src="../images/resize images/twitter.png" /></a></li>
                     <li><a href="../s"><img src="../images/resize images/youtube.png" /></a></li>
                </ul>     
            </section>
            <section>
                <img src="../images/resize images/Queens garden hotel.gif" />
            </section>
        </footer>
        
</div>               
                
 <script>
   $('.handle').on('click',functin(){
	   $('nav ul').toggleclass('showing');
   });
</script>                                    

</body>
<!-- InstanceEnd --></html>
