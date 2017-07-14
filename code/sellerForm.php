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
  padding: 8px 12px;
  text-decoration: none;
  font-size: 14px;
}

.topnav b {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 6px 10px;
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
      <b align="left"><font  size="3"><i style="font-size:24px;" class="fa">&#xf2b5;&nbsp;</i>A platform for buyers and sellers to interact directly</b>
	  <a style="text-indent:30em">&nbsp;</a>
	  <a href="homePage.php"><font size="3"><br>Home</a>
	  <a href="productForm.php"><font size="3"><br>Products</a>
      <a class="active" href="sellerForm.php"><font  size="3"><br>Post Free Ad</a>
	  <a href="buyerForm.php"><font size="3"><br>Sign Up</a>
	  </div>


<form action="productSave.php" method="post">
    
	 <br>
	
	  <fieldset style="margin-left:100px;height:400px; width:350px">
	  <legend><b>Product Details:</b></legend><br>
	
	
	<p>
    <label for="prod">Product:</label>
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

    $result = $conn->query("select distinct product_id, product_desc from kisanplatform.product_master");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='product_desc'>";

    while ($row = $result->fetch_assoc()) {

                  unset($product_id, $product_desc);
                  $product_id = $row['product_id'];
                  $product_desc = $row['product_desc']; 
                  echo '<option value="'.$product_desc.'">'.$product_desc.'</option>';
                 
	}

    echo "<name=$product_desc>";
	echo "</select>";
    echo "</body>";
    echo "</html>";
	?>
    </p>



    <p>
     <label for="subprod">Subproduct:</label>
     <input type="text" name="subprod" id="subprod">
	</p>

	<p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </p>

	<p>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity">
    </p>

    <p>
        <label for="units">Units:</label>
        <input type="text" name="units" id="units">
    </p>

    <p>
        <label for="desc">Description:</label>
        <input type="text" name="desc" id="desc">
    </p>

	<br>

      <p>
        <label for="availfrom">Available from:</label>
        <input type="date" name="availfrom" id="availFrom">

    </p>

	<p>
        <label for="availto">Available to:</label>
        <input type="date" name="availto" id="availTo">
    </p>
	

	</fieldset>
	<br>
       
<input type="submit" value="Continue->" style="margin-left:500px;height:30px; width:200px">

</form>	

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

</body>
</html>