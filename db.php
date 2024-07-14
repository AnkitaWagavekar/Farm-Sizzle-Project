<?php

$con=new mysqli('localhost','root','','register');

if ($con) {
	echo "connection successful";
	// code...
}
else
{
	die(mysqli_error($con));
}


?>