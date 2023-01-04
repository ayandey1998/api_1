<?php
    include "db.php";
    // include "user.json";

    $jsondata = file_get_contents('user.json');
    
    // print_r($jsondata);
    $data = json_decode($jsondata, 1);
    echo '<pre>';
    print_r($data);
    $id = $data['id'];
    $fname = $data['fname'];
    $lname = $data['lname'];
    $phone = $data['phone'];
    
    	
   	$sql = "INSERT INTO user SET `fname` = '".$fname."' ,`lname` = '".$lname."', `phone` = '".$phone."'";

  		if ($db_connection->multi_query($sql) == TRUE) {
    		echo "New records created successfully";
  		} else { 
    		echo "Error: " . $sql . "<br>" . $db_connection->error;
  		}
  $db_connection->close();


?>  
