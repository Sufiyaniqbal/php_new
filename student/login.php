<html><head>
<title>Login Page</title>
<body bgcolor="Lightskyblue">
<form  method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br><br>

    <button type="submit" name="log">Login</button>
    
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['log']))
{
    $user='root';
    $pass="";
    $db='php_new';
    $conn=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

    $name=$_POST['uname'];
    $pass=$_POST['pass'];

    $sql="select * from student where Name='$name' and Password='$pass'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)===1)
    {
        $row=mysqli_fetch_assoc($result);
        if($row['Name']===$name && $row['Password']===$pass)
        {
            $_SESSION['Name']=$row['Name'];
            header("location:welcome.php");
        }
        else{header("location:login.php?error=incorrect username password");

        }
    }
    else{
        header("location:login.php?error=incorrect username password");
        exit();
    }
    
}
?>