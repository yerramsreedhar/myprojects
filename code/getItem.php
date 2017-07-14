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