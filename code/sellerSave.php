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
	  <a href="productForm.php"><font  size="3"><br>Products</a>
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

//include "sellerForm.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];
$subprod = $_POST['subprod'];

// insert query execution
$sql = "INSERT INTO kisanplatform.seller_details (name,email,phone,location,city,state) VALUES ('$name', '$email', '$phone','$location','$city','$state')";


//$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "Seller Details saved successfully";
    echo "**********************************";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo $email;


 	$sql2 = "select subproduct_desc from kisanplatform.subproduct_details order by id desc limit 1";

	$result = $conn->query($sql2);

    while ($row = $result->fetch_assoc()) {
				  $subproduct_desc = $row['subproduct_desc']; 
                  echo $subproduct_desc;
	}



echo $subproduct_desc;


// insert query1 execution
$sql1 = "update kisanplatform.subproduct_details set seller_id = LAST_INSERT_ID() where subproduct_desc='$subproduct_desc'";


//$result = mysqli_query($conn,$sql);

if ($conn->query($sql1) === TRUE) {
    echo "Seller Details1 saved successfully";
    echo "**********************************";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}




// close connection
$conn->close();

?>

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

</body>
</html>