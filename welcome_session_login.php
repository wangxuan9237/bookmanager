<?php
session_start();
if(isset($_SESSION['username']))
{
        echo "WELCOME!".$_SESSION['username']."login!";
 	echo "<a href='show_books.php'>SEARCHBOOKS</a>";
 	echo "<a href='destroy_session_login.php'>LOGOUT</a>";
//	echo "<a href='destroy_session_login.php'>logout</a>"

}
else
{
    echo "YOU CAN NOT VISIT THIS PAGE.";
}
?>
