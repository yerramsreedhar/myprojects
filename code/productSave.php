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
	  <b href="#" style="height:30px;font-size:180%"><font size="5">Kisan Platform</b>
	  </div>
      <div class="topnav">
      <b align="left"><font size="3"><i style="font-size:24px;" class="fa">&#xf2b5;</i>A platform for buyers and sellers to interact directly</b>
	  <a style="text-indent:30em">&nbsp;</a>
	  <a class="active" href="homePage.php"><font size="3"><br>Home</a>
	  <a href="productForm.php"><font size="3"><br>Products</a>
      <a href="sellerForm.php"><font size="3"><br>Post Free Ad</a>
	  <a href="buyerForm.php"><font size="3"><br>Sign Up</a>
	  </div>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

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
$subprod = $_POST['subprod'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$units = $_POST['units'];
$description = $_POST['desc'];
$availfrom = $_POST['availfrom'];
//$availFrm2 = date('Y-m-d H:i:s', strtotime($availFrm1));
//$availToo = date('Y-m-d', strtotime($_POST['availto']));
//$date1 = strtr($_POST['availFrom'], '/', '-');
//echo date('Y-m-d', strtotime($date1));
$availto = $_POST['availto'];
echo $availfrom;
echo $availto;


$sql = "INSERT INTO kisanplatform.subproduct_details (product_desc,subproduct_desc,quantity,price,units,description,available_from,available_to) 
          VALUES ('$product','$subprod', '$quantity','$price','$units','$description','$availfrom','$availto')";



if ($conn->query($sql) === TRUE) {
    //echo "Product Details saved successfully";
    //echo "**********************************";
} else {
    echo "Error: " . $sql . "<br>" .  $sql1 . "<br>" . $conn->error;
}



// close connection
$conn->close();

?>

 <form action="sellerSave.php" method="post">
    
	   <br>		
	
	
	 <fieldset style="margin-left:100px;height:360px; width:320px">
	  <legend><b>Seller Contact Details:</b></legend><br>
	<p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email">E-Mail:</label>
        <input type="text" name="email" id="email">
    </p>
	<p>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
    </p>
	<br>
	<p>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location">
    </p>
    <p>
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
    </p>
    <p>
        <label for="state">State:</label>
        <input type="text" name="state" id="state">
    </p>
   
	</fieldset>

	<br>


<input type="submit" value="Save" style="margin-left:500px;height:30px; width:200px">


</form>



<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>


</body>
</html>