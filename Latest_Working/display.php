
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Inquiry Form</title>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/inquery.css">
</head>
<body>
   <div class="form">
      <div class="header">
         <h2>Inquiry Form</h2>
      </div>
      <div class="login">
         <?php
            //Connecting to the database
            include 'include.php';
            
            //Capturing the rest of the info from the form and storing them in php variables
            $Inquiry_ID = $_POST['Username'];
            $Age = $_POST['Age'];
            $Profession = $_POST['Profession'];
            $Gender = $_POST['Gender'];
            $Apt_type = $_POST['Apt_type'];
			
		
			
            
            //Inserting the values stored in the php variables into the inquiry2 table
            $sql = "INSERT INTO userinfo (Inquiry_ID, Age, Gender, Profession, Apt_type) 
            VALUES ('$Inquiry_ID' , '$Age', '$Gender' , '$Profession', '$Apt_type')";
            
            if ($conn->query($sql) ===TRUE) {
               echo "New record created successfully <br>";
            } else {
               echo "Error:" . $sql . "<br>" . $conn->error;
            }
            
            //Retrieving information from both the tables over the common Inquiry_ID
            $query3 = "
            SELECT 
              First_Name, Last_Name, Username, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.Inquiry_ID = userinfo.Inquiry_ID
              
             WHERE
              userinfo.Inquiry_ID='$Inquiry_ID'";
              
            $result3 = $conn->query($query3);
            $row=$result3->fetch_assoc();
            
            //Storing the information in PHP variables
            $Firstname=$row["First_Name"];
            $Lastname=$row["Last_Name"];
            $Username=$row["Username"];
            $Age=$row["Age"];
            $Gender=$row["Gender"];
            $Profession=$row["Profession"];
            $Apt_type=$row["Apt_type"];
            
            
                    
                   
            
            $conn->close();
            ?>
         <h3 class="display animated  fadeInRight">
            <br>Your First Name is:<?php echo $Firstname; ?> <br>
            Your Last Name is: <?php echo $Lastname; ?><br>
            Your Usernameame is: <?php echo $Username; ?><br>
            Your Age is: <?php echo $Age; ?><br>
            Your Gender is: <?php echo $Gender; ?><br>
            Your Profession is: <?php echo $Profession; ?><br>
            You chose a <?php echo $Apt_type; ?> apartment<br>
         </h3>
         <form method="get" action="admin.php">
            <input type="submit" value="View Database" class="btn">
         </form>
      </div>
      <br/>
   </div>
</body>
</html>