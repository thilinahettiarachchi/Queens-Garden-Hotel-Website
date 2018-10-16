
<!doctype html>
<html>
<head>
      <?php
        
        //.......connection...
        $conn = mysqli_connect("localhost", "root", "", "test1");
        // port eka 3306 nemei nam pamanak denava nathnam default 3306 add karagani
        if (!$conn) {
            die("connection error @@@@@@@@@@@@@@@" . mysqli_connect_error());
        }
        $sql = "insert into tbl1(name,age) value('Allion','123')";
        mysqli_query($conn, $sql);
        mysqli_close();
        echo $fname;
		echo $age;
        
        ?>
<meta charset="utf-8">
<title>Buy</title>
<link href="../../../wamp/www/Web_Project/CSS/Styles.css" rel="stylesheet" type="text/css" />
</head>

<body background="../../../wamp/www/Web_Project/data/back.jpg">
<header>
        <a href="../../../wamp/www/Web_Project/s" id="logo"></a>
        <nav>
            <a href="../../../wamp/www/Web_Project/s" id="menu-icon"></a>
            
         
            <ul>
                <li><a href="../../../wamp/www/Web_Project/Home.html" class="current">HOME</a></li>
                <li><a href="../../../wamp/www/Web_Project/AboutUs.html">ABOUT US</a></li>
                <li><a href="../../../wamp/www/Web_Project/Products.html">PRODUCTS </a></li>
                <li><a href="../../../wamp/www/Web_Project/factory.html">FACTORY</a></li>
                <li><a href="../../../wamp/www/Web_Project/Location.html">LOCATION</a></li>
                <li><a href="../../../wamp/www/Web_Project/Gallery.html">GALLERY</a></li>
                <li><a href="../../../wamp/www/Web_Project/Order.php">ORDER </a></li>
                <li><a href="../../../wamp/www/Web_Project/ContactUs.html">CONTACT US</a></li>
            </ul>
      </nav>
      
</header>
<br/><br/><br/>

<h1><center><ul><b>Order Tea</b></ul></center></h1> <br/><br/>

<section>
 <font class="content2">Products <br/><br/></font>
 
 
 <form action="../../../wamp/www/Web_Project/buy.php" method="post"><input type="submit" value="PUKA" class="button">
 <input type="text" name="name">
 <input type="text" name="age">
 </form>
 
 <div class="box">
 <form>
 <font class="content2">
 <table width="289">
 <tr><td>*</td>
 <td><input type= "checkbox"></td> <td>Black Tea<br/> </td>
 </tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Herbal Tea<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Ginger Tea<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Green Te<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Cinnemon Te<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Apple Te<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>Yellow Te<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"> </td> <td>White Te<br/> </td>
</tr><tr><td>*</td>
<td> <input type= "checkbox"></td> <td> Leamon Te<br/> </td>
</tr>
<tr>
<tr><td></td><td></td><td></td></tr>
 <td><input type="submit" value="Order" class="button"></td>
 <td><input type="reset" value="Reset" class="button"></td>
 <td><input type="submit" value="View Products" class="button" formaction="Products.html"></td>
 </tr>
</table>
 </font>
 </form>
 </div>
 </section>
 
 <section>
 <font class="content2">Tea Bulks <br/><br/>
  <div class="box">
 <form>
 <table><tr>
 <td width="142">No of bulks <br/>(1 bulk = 10Kg)</td><td width="165"><input type="text" required="required"></td>
 </tr>
<tr>
 <td><input type="submit" value="Order" class="button"></td>
<td> <input type="reset" value="Reset" class="button"></td>
 </tr>
 </table>
 </form>
 </div>
 </font>
 
</section>
<section>
<img src="../../../wamp/www/Web_Project/data/000.jpg" height="350" width="500" class="imagecircle2">
</section>
<footer>
            <section>       
                <h3><b>Contact Details</b></h3>
                <p><b>TEL: </b>(+94)71 5548748<br /><br />
			    <b>ADDRESS :</b> <br/>
                NO:126<br />
                Galle Road<br />
                Matara.<br /><br/>
               <b> EMAIL :</b> info@henrytea.com</p>
            </section>
            <section>                
                <h3>Join With Us</h3>
                <ul class="social">
                     <li><a href="../../../wamp/www/Web_Project/s"><img src="../../../wamp/www/Web_Project/data/fb.png" /></a></li>
                     <li><a href="../../../wamp/www/Web_Project/s"><img src="../../../wamp/www/Web_Project/data/google.jpg" /></a></li>
                     <li><a href="../../../wamp/www/Web_Project/s"><img src="../../../wamp/www/Web_Project/data/twitter.jpg" /></a></li>
                     
                </ul>     
            </section>
            <section>
                <img src="../../../wamp/www/Web_Project/Data/1.jpg" width="350" height="220"/>
        </section>
        </footer>

</body>
</html>
