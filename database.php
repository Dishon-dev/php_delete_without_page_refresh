<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "members";
 $port = 3308;
 
 $conn = mysqli_connect( $dbhost,$dbuser,$dbpass,$dbname, $port);
if(!$conn)
{
  die("Connection failed");
}