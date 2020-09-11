<!DOCTYPE html>

<html lang="EN">

      <head>
            <title>Flower Advertisement Info Display</title>
            <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
            <!-- Links CSS Style sheet -->
            <link rel="stylesheet" type="text/css" href="style.css" />
      </head>

      <body>
         <div>
            <?php

               $usrname=($_POST['usrname']);
               $addy=($_POST['address']);
               $city=($_POST['city']);
               $st=($_POST['state']);
               $em=($_POST['email']);
               $phone=($_POST['phone']);

               echo "User Name: ".$usrname;
               echo "<br> Address: ".$addy;
               echo "<br> City: ".$city;
               echo "<br> State: ".$st;
               echo "<br> Email: ".$em;
               echo "<br> Phone Number: ".$phone;
               echo "<br> Thank you for your information. More information will be on the way!";
               $disp = "https://swe.umbc.edu/~papri1/is448/1598-papri1-hw5/ad.html";
               echo "<br> <a href=$disp > Return to main page <a/>";
            ?>
         </div>
      </body>
</html>