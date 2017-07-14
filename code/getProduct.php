<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>


  <form action="moreInfo.php" method="post">
    <table>
	<tr>
	<td>
  	<fieldset style="margin-left:60px;height:260px; width:260px">
	
	<img src="images/rice.jpg" alt="Mountain View" style="margin-left:30px;width:180px;height:80px;">

	<p>
        <label for="firstName" >Category: Rice</label>
    </p>

    <p>
        <label for="firstName" >Item:</label>
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

    $result = $conn->query("select item_id, item_name from kisanplatform.products");
    
    echo "<html>";
    echo "<body>";
    echo "<select item_name='item_id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($item_id, $item_name);
                  $item_id = $row['item_id'];
                  $item_name = $row['item_name']; 
                  echo '<option value="'.$item_id.'">'.$item_name.'</option>';
                 
	}

    echo "</select>";
    echo "</body>";
    echo "</html>";
	?>

   </p>

   <br>
   <input type="submit" value="Continue ->" style="margin-left:80px;height:30px; width:100px">
	</fieldset>
   </td>
  </form>
