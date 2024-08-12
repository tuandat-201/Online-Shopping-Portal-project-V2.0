<?php
define('DB_SERVER','localhost');
define('DB_USER','datldt');
define('DB_PASS' ,'Ledat711201@');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
