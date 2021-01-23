<?php


   $dbhost = "db";
   $dbuser = "root";
   $dbpass = "my!!root!!pw";

   $conn = new mysqli($dbhost, $dbuser, $dbpass);

   if (!$conn) {
      die('Connection error: ' . mysql_error());
   }
   
   echo 'Connection OK';
?>