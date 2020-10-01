<?php
require 'config.php';

$sql = "INSERT INTO users (name, age, phone, address) VALUES ('Anish', 21, '9823748459', 'Nepal')";


if($conn->query($sql) == TRUE){
	echo "Successfully created";
} else {
	echo "Error: " . $sql. "<br>" . $conn->error;
}