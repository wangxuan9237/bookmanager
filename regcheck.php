<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "register")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];  
        if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('Make sure that you have fill all.'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root","w1990327");  
                mysql_select_db("USER");    
               // mysql_query("set names 'gdk'"); 
                $sql = "select username from user where username = '$_POST[username]'"; 
                $result = mysql_query($sql);     
                $num = mysql_num_rows($result); 
                if($num)    
                {  
                    echo "<script>alert('YOU have registered!'); history.go(-1);</script>";  
                }  
                else    
                {  
                    $sql_insert = "INSERT INTO user (username,password) VALUES('$_POST[username]','$_POST[password]')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('SUCCESS REGISTED!'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('SYSTEM IS BUSY,TRY LATER.'); history.go(-1);</script>";  
                    }  
                    
                    $sql_creat = "CREATE TABLE bookbrw(username VARCHAR(20),bookname VARCHAR(50))"; 
                    $res_insert = mysql_query($sql_creat);
                    

              }  
            }  
            else  
            {  
             echo "<script>alert('PASSWORD WRONG.'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('SORRY...'); history.go(-1);</script>";  
    }  
?>  
