<?php
$con = mysql_connect("localhost","root","w1990327");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_test", $con);

$sql="INSERT INTO person (id,firstName, lastName, phone)
VALUES
('$_POST[id]','$_POST[firstname]','$_POST[lastname]','$_POST[phone]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
