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
	  <a href="homePage.php"><font size="3"><br>Home</a>
	  <a href="productForm.php"><font size="3"><br>Products</a>
      <a href="sellerForm.php"><font size="3"><br>Post Free Ad</a>
	  <a class="active" href="buyerForm.php"><font size="3"><br>Sign Up</a>
	  </div>


<form action="buyerSave.php" method="post">
    
	   <br><br><br><br>
	  <fieldset style="margin-left:100px;height:320px; width:320px">
	  <legend><b>Buyer Details:</b></legend><br>
	<p>
        <label for="firstName">Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
    </p>
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
	<br><br>
    <input type="submit" value="Order" style="margin-left:400px;height:30px; width:200px">
</form>

<div id="footer"><font color="white" size="3">&nbsp;&nbsp;&nbsp;&nbsp;Email Us At : info.kisanplatform@gmail.com</div>

</body>
</html>