<html>
   <body>
      <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "movies";
         
         // Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         
         // Check connection
         if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         }
         
         $genre = $_POST['genre'];
         $Country = $_POST['Country'];
         $Price = $_POST['Price'];
         $Price = $_POST['Language'];
         
         $sql = "INSERT INTO contacts (genre, Country, Price, Language ) 
         VALUES ('$genre', '$Country', '$Price', '$Language')";
         
         if ($conn->query($sql) ===TRUE) {
            echo "New record created successfully <br>";
         } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
         }
         
         ?>
      Welcome <?php echo $name; ?><br>
      Your email is: <?php echo $email; ?>
      Your message is: <?php echo $message; ?>
   </body>
</html>