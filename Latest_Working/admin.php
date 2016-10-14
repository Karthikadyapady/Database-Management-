<?php include 'include.php';?>
<!DOCTYPE html>
<html lang="en-us">
   <head>
      <meta charset="UTF-8">
      <title>Real Estate Database</title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h2 class="heading">Inquiry Database</h2>
      <table>
         <tr>
            <th>Sr. No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Profession</th>
            <th>Apartment Type</th>
            <th>Delete</th>
            <th>Update</th>
         </tr>
         <?php
            $i=1; //Variable to check all info_ids
            $sn=1; //Variable to print the serial number
            while ($i<100) {
            //Checking through all the info_ids
            $query2 = "
            SELECT 
              Info_ID
            FROM
              userinfo
            WHERE
              Info_ID='$i'";
            $result2=$conn->query($query2);
            //Execute only if a row with that info_id present in the database
            if($row=$result2->fetch_assoc()){
            
            //Query to retrieve all the information from the database
            $query3 = "
            SELECT 
              First_Name, Last_Name, Username, Info_ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.Inquiry_ID = userinfo.Inquiry_ID
              
             WHERE
              userinfo.Info_ID='$i'";
              
            $result3 = $conn->query($query3);
            $row=$result3->fetch_assoc();
            
            //Storing all the retrieved information in PHP variables
            $Firstname=$row["First_Name"];
            $Lastname=$row["Last_Name"];
            $Username=$row["Username"];
            $Age=$row["Age"];
            $Gender=$row["Gender"];
            $Profession=$row["Profession"];
            $Apt_type=$row["Apt_type"];
            $info_id=$row["Info_ID"];
            
            //Displaying all the data as a table row
            echo "<tr><td>".$sn."</td><td>".$Firstname."</td><td>".$Lastname."</td><td>".$Username."</td><td>".$Age."</td><td>".$Gender."</td><td>".$Profession."</td><td>".$Apt_type."</td>
            <td><a href=delete.php?info_id=" . $info_id  ."><button type=\"button\" class=\"btn\">Delete</button></a></td><td><a href=updateForm.php?info_id=" . $info_id  ."><button type=\"button\"class=\"btn\">Update</button></a></td></tr>";
            $sn++; //incrementing the serial number, if the row is printed
            }
            $i++; //incrementing variable to check the next info_id after each pass 
            }
            
            ?>
      </table>
   </body>
</html>