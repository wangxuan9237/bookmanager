<?php
session_start();
if(isset($_SESSION['username']))
{
$con = mysql_connect("localhost","root","w1990327");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("USER", $con);

$result = mysql_query("SELECT * FROM books");

echo "<table border='1'>
<tr>
<th>bookname</th>
<th>classify</th>
<th>nums</th>
<th>whoborrow</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['bookname'] . "</td>";
  echo "<td>" . $row['classify'] . "</td>";
  echo "<td>" . $row['nums'] . "</td>";
  echo "<td>" . $row['whobrw'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
}

else{
	echo "YOU HAVE NO RIGHTS!!!";
}

?>
