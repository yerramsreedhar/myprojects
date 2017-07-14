<!-- Detailed information page for product - solarproducts -->
<!-- ********************************************** -->
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
	  <b href="#" style="height:30px;font-size:180%"><font size="5">Kisan Platform</b>
	  </div>
      <div class="topnav">
      <b align="left"><font  size="3"><i style="font-size:24px;" class="fa">&#xf2b5;&nbsp;</i>A platform for buyers and sellers to interact directly</b>
	  <a style="text-indent:30em">&nbsp;</a>
	  <a class="active" href="homePage.php"><font  size="3"><br>Home</a>
	  <a href="productForm.php"><font size="3"><br>Products</a>
      <a href="sellerForm.php"><font size="3"><br>Post Free Ad</a>
	  <a href="buyerForm.php"><font size="3"><br>Sign Up</a>
	  </div>


   <table>
	<tr>
	
	<td>
  	<fieldset style="margin-left:60px;height:260px; width:260px">
	
	<img src="images/solarproducts.jpg" alt="Mountain View" style="margin-left:30px;width:200px;height:100px;">

	</fieldset>
   </td>

  <br><br><br>
  <td>
 <fieldset style="margin-left:60px;height:360px; width:300px">
		
		<p>
        <label for="firstName">Product: </label>
		<?php
		session_start();
		$var4 = $_SESSION['myValue4'];
		echo $var4;
		//session_unset(); 
		//session_destroy();

		//if(isset($_SESSION['myValue']))
	//{
	//	unset($_SESSION['myValue']);
		//}

		?>
		
        </p>
		
		
		<p>
        <label for="firstName">Subproduct: </label>
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

    $product = $_POST['product_desc'];
    $subprod = $_POST['subproduct_desc'];

	//echo $product;
	//echo $subprod;

	//select query execution
	$sql1 = "SELECT distinct subproduct_desc FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                 // unset($email, $name);
                //  $id = $row['id'];
               //   $seller_id = $row['seller_id']; 
				  $subproduct_desc = $row['subproduct_desc']; 
				//  $quantity = $row['quantity']; 
				//  $price = $row['price']; 
				//  $units = $row['units']; 
				//  $description = $row['description']; 
				//  $available_from = $row['available_from']; 
				//  $available_to = $row['available_to']; 
                  echo $subproduct_desc;
	}

 	?>

        </p>
		
		<p>
        <label for="firstName">Price:</label>
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


	//select query execution
	$sql1 = "SELECT distinct price FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

			  $price = $row['price']; 
              echo $price;
	}

 	?>

        </p>
        
		<p>
        <label for="lastName">Quantity:</label>
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


	//select query execution
	$sql1 = "SELECT distinct quantity FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                 // unset($email, $name);
                 // $id = $row['id'];
                //  $seller_id = $row['seller_id']; 
				//  $subproduct_id = $row['subproduct_id']; 
				 $quantity = $row['quantity']; 
				//  $price = $row['price']; 
				//  $units = $row['units']; 
				//  $description = $row['description']; 
				 // $available_from = $row['available_from']; 
				//  $available_to = $row['available_to']; 
                  echo $quantity;
	}

 	?>

		
		</p>
        
		<p>
        <label for="emailAddress">Units:</label>
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


	//select query execution
	$sql1 = "SELECT distinct units FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

				 $units = $row['units']; 
	             echo $units;
	}

 	?>

      </p>

    <br><br>
    	 <p>
        <label for="firstName"><b>Product Availability Dates</b></label>
        </p>
    <p>
        <label for="lastName">From:</label>
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


	//select query execution
	$sql1 = "SELECT distinct available_from  FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

  			  $available_from = $row['available_from']; 
              echo $available_from;
	}

 	?>
    </p>  
     <p>
        <label for="lastName">To:</label>
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


	//select query execution
	$sql1 = "SELECT distinct available_to FROM kisanplatform.subproduct_details where subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

				  $available_to = $row['available_to']; 
                  echo $available_to;
	}

 	?>

  </p>  
     

</fieldset>
</td>

 <br><br><br>
  <td>
 <fieldset style="margin-left:60px;height:360px; width:300px">
		
		<legend><b>Seller Contact Details:</b></legend>
		 
		 <p>
        <label for="firstName">Name:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $email = $row['email'];
                  $name = $row['name']; 
				  $phone = $row['phone']; 
				  $location = $row['location']; 
				  $city = $row['city']; 
				  $state = $row['state']; 
                  echo $name;
	}

 	?>
    </p>
    
	<p>
        <label for="lastName">E-Mail:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $email = $row['email'];
                  echo $email;
	}

 	?>    
   </p>

    <p>
        <label for="emailAddress">Phone:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $phone = $row['phone'];
                  echo $phone;
	}

 	?>
    </p>
     <br>
		 
		 <p>
        <label for="firstName" style="margin-left:20px"><b>Address</b></label>
        </p>
        
		<p>
        <label for="lastName" >Location:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $location = $row['location'];
                  echo $location;
	}

 	?>
        </p>  
     
	    <p>
        <label for="lastName">City:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $city = $row['city'];
                  echo $city;
	}

 	?>
        </p>  
        
	    <p>
        <label for="lastName">State:</label>
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


	//select query execution
	$sql1 = "SELECT distinct name,email,phone,location,city,state FROM kisanplatform.seller_details a,kisanplatform.subproduct_details b where 
	a.seller_id=b.seller_id and b.subproduct_desc='$subprod'";

	$result = $conn->query($sql1);

    while ($row = $result->fetch_assoc()) {

                  unset($email, $name);
                  $state = $row['state'];
                  echo $state;
	}

 	?>
        </p>  
	    

</fieldset>
</td>



</tr>
</table>

</form>

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

</body>
</html>