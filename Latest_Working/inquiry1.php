<!DOCTYPE html>
<html lang="en-us">
   <meta charset="utf-8" />
   <head>
      <title>Inquiry Form</title>
      <link rel="stylesheet" href="css/inquery.css">
   </head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="form">
         <div class="header">
            <h2>Inquiry Form</h2>
         </div>
         <div class="login">
            <form action="seperate.php" method="post">
               <ul>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="First Name" name="Firstname"/>
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="Last Name" name="Lastname"/>
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="Username" name="Username"/>
                  </li>
                  <li>
                     <input type="submit" value="NEXT" class="btn">
                  </li>
               </ul>
            </form>
            <form method="get" action="admin.php">
               <input type="submit" value="View Database" class="btn">
            </form>
         </div>
         <br/>
      </div>
   </body>
</html>