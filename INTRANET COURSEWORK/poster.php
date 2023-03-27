<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "user");

		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		};
		
		// Taking all 3 values from the form data(input)
		$Postme = $_POST['Postme'];
        $Texter = $_POST['Texter'];
		// $fileToUpload = $_POST['fileToUpload'];
        
		
		 

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO coll VALUES ('$Postme', '$Texter')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your post will be live once our admin approve it</h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
		}

		?>
	</body>

	</html>
