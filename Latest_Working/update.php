<?php
//Connecting to the database
	include 'include.php';
	
//Getting the info_id and other information based on the row selected
	$info_id = $_POST['info_id'];
	$Age = $_POST['Age'];
	$Profession = $_POST['Profession'];
	$Gender = $_POST['Gender'];
	$Apt_type = $_POST['Apt_type'];
//code for spl character here
	$Profession2=htmlspecialchars($Profession, ENT_QUOTES);

	
//Query to update the information stored in the database
	$sql =  "UPDATE userinfo SET Age='$Age', Profession='$Profession2', Apt_type = '$Apt_type', Gender='$Gender'
  WHERE Info_ID = $info_id";
	$result = $conn->query($sql);
	
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();

	//Redirecting to the admin.php page
	header('Location: admin.php');
	?>
