<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6434984", "vA3VgpXckB", "sql6434984");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$id = $_GET['id'];

		$del = mysqli_query($conn,"DELETE FROM sql6434984.counselling where Choice_Order='$id';");

		if($del)
        {
            mysqli_close($conn); // Close connection
            header("location:crud.php"); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
        ?>
