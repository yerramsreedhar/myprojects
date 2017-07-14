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
      <b align="left"><font size="3"><i style="font-size:22px;" class="fa">&#xf2b5;&nbsp;</i>A platform for buyers and sellers to interact directly</b>
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

$name = $_POST['first_name'];
$email = $_POST['email'];
$phoneno = (int)$_POST['phone'];
$location = $_POST['location'];
$city = $_POST['city'];
$state = $_POST['state'];


// insert query execution
$sql = "INSERT INTO kisanplatform.buyer_details (name, email, phone,location,city,state) VALUES ('$name', '$email', '$phoneno','$location','$city','$state')";

//$result = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "Address Details saved successfully"."<br>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//select query execution
$sql1 = "SELECT name, email, phone,location,city,state FROM kisanplatform.buyer_details where email='$email'";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     echo "<table><tr><th>name : </th> <td>" .$row["name"]. "</td></tr>";
	 echo "<table><tr><th>email : </th> <td>" .$row["email"]. "</td></tr>";
	 echo "<table><tr><th>phone : </th> <td>" .$row["phone"]. "</td></tr>";
	 echo "<table><tr><th>location : </th> <td>" .$row["location"]. "</td></tr>";
	 echo "<table><tr><th>city : </th> <td>" .$row["city"]. "</td></tr>";
     echo "<table><tr><th>state : </th> <td>" .$row["state"]. "</td></tr>";
	 }
} else {
     echo "0 results";
}

// close connection
$conn->close();

?>

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

 
</body>
</html>