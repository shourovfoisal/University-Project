<?php  

	$connection = mysqli_connect("localhost","root","","project");
	// Check connection
    if($connection === false)
    {
        die("ERROR: Could not connect to database.\n".mysqli_connect_error());
    }
?>