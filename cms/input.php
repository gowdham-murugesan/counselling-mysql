<!DOCTYPE html>
<html lang="en">

<head>
	<title>Choice List - INPUT</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="" method="post">
			
			
<p>
				<label for="College_Code">College_Code :</label>
				<input type="number" name="College_Code" id="College_Code">
			</p>



			
			
<p>
				<label for="College_Name">College_Name :</label>
				<input type="text" name="College_Name" id="College_Name">
			</p>



			
			
<p>
				<label for="Branch_Name">Branch_Name :</label>
				<input type="text" name="Branch_Name" id="Branch_Name">
			</p>


			
			
			
<p>
				<label for="Closing_Cutoff">Closing_Cutoff :</label>
				<input type="text" name="Closing_Cutoff" id="Closing_Cutoff">
			</p>


			
			<input type="submit" value="Submit" name="SubmitButton">
		</form>

		<?php
		if(isset($_POST['SubmitButton'])){

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("remotemysql.com", "0hiopFTaJ2", "3FAeaFsGPR", "0hiopFTaJ2");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$College_Code = $_REQUEST['College_Code'];
		$College_Name = $_REQUEST['College_Name'];
		$Branch_Name = $_REQUEST['Branch_Name'];
		$Closing_Cutoff = $_REQUEST['Closing_Cutoff'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO 0hiopFTaJ2.counselling (College_Code, College_Name, Branch_Name, Closing_Cutoff)
				VALUES ('$College_Code', '$College_Name', '$Branch_Name', '$Closing_Cutoff')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\nCollege_Code : $College_Code\n College_Name : $College_Name\n "
				. "Branch_Name : $Branch_Name\n Closing_Cutoff : $Closing_Cutoff");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	}
		?>
	</center>
</body>

</html>
