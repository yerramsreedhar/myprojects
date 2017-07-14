<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #339933;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 6px 10px;
  text-decoration: none;
  font-size: 14px;
}

.topnav b {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #B1B4B1;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

#footer {
   position:fixed;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background: #339933;
}


</style>

</head>
<body>

 	  <div class="topnav">
	  <b href="#" style="height:30px;font-size:180%"><font  size="5">Kisan Platform</b>
	  </div>
      <div class="topnav">
      <b align="left"><font  size="3"><i style="font-size:22px;" class="fa">&#xf2b5;&nbsp;</i>A platform for buyers and sellers to interact directly</b>
	  <a style="text-indent:30em">&nbsp;</a>
	  <a href="homePage.php"><font size="3"><br>Home</a>
	  <a class="active" href="productForm.php"><font  size="3"><br>Products</a>
      <a href="sellerForm.php"><font size="3"><br>Post Free Ad</a>
	  <a href="buyerForm.php"><font size="3"><br>Sign Up</a>
	  </div>
 

  <form action="moreInfo.php" method="post">
    <table>
	<tr>
	<td>
  	<fieldset style="margin-left:60px;height:240px; width:260px">
	
	<img src="images/fruits.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">

	&nbsp;
	<p>
        <label for="firstName" >Product: Fruits</label>
		<?php
		session_start();
		$_SESSION['myValue']=fruits; // You can set the value however you like.
		?>
      </p>

    <p>
        <label for="firstName" >Subproduct:</label>
 	 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=1");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>

   </p>

   <br>
   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
	</fieldset>
   </td>
  </form>

 <form action="moreInfo1.php" method="post">
  <td>
 <fieldset style="margin-left:60px;height:240px; width:260px">
	
    <img src="images/cereals.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">
		  <p>
        <label for="firstName">Product: Cereals</label>
        <?php
		session_start();
		$_SESSION['myValue1']=cereals; // You can set the value however you like.
		?>
    </p>

    <p>
        <label for="lastName">Subproduct:</label>
    
   	 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=2");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?> 


    </p>
	<br>
   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
</fieldset>
</td>

   <form action="moreInfo2.php" method="post">
   <td>
 <fieldset style="margin-left:60px;height:240px; width:260px">
		
	<img src="images/pulses.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">
	
	<p>
        <label for="firstName">Product: Pulses</label>
   		<?php
		session_start();
		$_SESSION['myValue2']=pulses; // You can set the value however you like.
		?>
    </p>

    <p>
        <label for="lastName">Subproduct:</label>
   
	 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=3");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>

    </p>
 
 	<br>
   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
</fieldset>
</td>
</form>
</tr>

<br><br>
 <tr>
 <form action="moreInfo3.php" method="post">
 <td>
 <fieldset style="margin-left:60px;height:240px; width:260px">
	
  <img src="images/Agri-Real-Estate.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">

	<p>
        <label for="firstName">Product: Real Estate</label>
    	<?php
		session_start();
		$_SESSION['myValue3']=realestate; // You can set the value however you like.
		?>
    </p>

    <p>
        <label for="lastName">Subproduct:</label>
    
   	 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=4");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>


    </p>

   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
</fieldset>
</td>
</form>

 <form action="moreInfo4.php" method="post">
<td>
<fieldset style="margin-left:60px;height:240px; width:260px">
		
  <img src="images/solarproducts.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">
	
	<p>
        <label for="firstName">Product: Solar Products</label>
    	<?php
		session_start();
		$_SESSION['myValue4']=solarproducts; // You can set the value however you like.
		?>
    </p>

    <p>
        <label for="lastName">Subproduct:</label>
    
		 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
 
    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=5");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>

	</p>
 
   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
</fieldset>

</td>
</form>

 <form action="moreInfo5.php" method="post">
<td>
<fieldset style="margin-left:60px;height:240px; width:260px">
	  
	<img src="images/Legal-Services.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">

	<p>
        <label for="firstName">Product: Legal Services</label>
		<?php
		session_start();
		$_SESSION['myValue5']=legalservices; // You can set the value however you like.
		?>
    </p>

    <p>
        <label for="lastName">Subproduct:</label>
        
		 <?php

	$servername = "localhost";
	$username = "root";
	$password = "Welcome01";
	$dbname = "kisanplatform";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

    $result = $conn->query("select subproduct_id, subproduct_desc from kisanplatform.product_master where product_id=6");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='subproduct_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($subproduct_id, $subproduct_desc);
                  $subproduct_id = $row['subproduct_id'];
                  $subproduct_desc = $row['subproduct_desc']; 
                  echo '<option value="'.$subproduct_desc.'">'.$subproduct_desc.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>


    </p>

   <input type="submit" value="+ More Info" style="margin-left:60px;height:30px; width:140px">
</fieldset>

</td>



</tr>
</table>

</form>

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

</body>
</html>