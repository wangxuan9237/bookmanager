<?php
@mysql_connect("localhost","root",'w1990327')
or die("fail to connect db.");
@mysql_select_db("USER")
or die("fail to get db.");

$username = $_POST['username'];
$password = $_POST['password'];

$query = @mysql_query("select username from user where username = '$username' and password = '$password'")
or die("SQL FAIL.");

if($row = mysql_fetch_array($query))
{
    session_start();

   
    $_SESSION['username'] = $row['username'];
       
    //echo "<a href='welcome_session_login.php'>Welcome to my home.</a>";
    header("Location:welcome_session_login.php");   

}else{
    echo "WRONG!";
}
?>
