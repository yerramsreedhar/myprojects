<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #B1B4B1;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<nav class="topnav">
 	 <div class="navbar-header" align="left">
      <a class="navbar-brand" href="#" style="height:30px;font-size:180%">Kisan Platform</a>
 	</div>
	<br>
	<a style="margin-left:0px;">..A platform for buyers and sellers to interact directly</a>
	  <ul class="topnav">
      <a class="active" href="homePage.php">Home</a>
	  <a href="productForm.php">Products</a>
      <a href="sellerForm.php">Post Free Ad</a>
	  <a href="buyerForm.php">Sign Up</a>
	  <a href="logoutPage.php">Log Out</a>
      </ul>
</nav>

<div style="padding-left:16px">
   <p>You have been successfully logged out from the site</p>
</div>

</body>
</html>