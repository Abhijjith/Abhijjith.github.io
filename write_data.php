<?php

    // Prepare variables for database connection
   
    $dbusername = "root";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "root";  // enter database password, I used "arduinotest" in step 2.2
    $server = "https://www.abhijjith.github.io"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

    $dbconnect = mysql_pconnect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("testcar",$dbconnect);

    // Prepare the SQL statement

    $sql = "INSERT INTO testcar.bump1 (type,check1) VALUES ('".$_GET["type"]."','0')";    

    // Execute SQL statement

    mysql_query($sql);

?>
