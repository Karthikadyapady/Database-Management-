<?php

//Connecting to the database
include 'include.php';

//Getting the info_id based on the row selected 
$info_id = $_GET['info_id'];

//Query to delete the row with that info_id from the database 
$sql = "DELETE FROM userinfo WHERE Info_ID=$info_id";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

//Redirecting to the admin.php page
header('Location: admin.php');

?>